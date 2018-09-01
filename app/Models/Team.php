<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Point;
use DB;

class Team extends Model
{

    public $table = 'teams';
    public $timestamps = true;

    public $primaryKey = 'id';

    public $fillable = [
        'name',
        'safe_name',
        'description',
        'img_url'
    ];

    public function scoreQuery()  {
        //I did not use Eloquent because I needed to sum 2 cols
        //and it's not possible using Eloquent
        return DB::table("challenges")
            ->select(DB::raw("SUM(challenges.points) score"))
            ->join("challenge_validations", "challenges.id", "=", "challenge_validations.challenge_id");
    }

    public function score() : int {
        $score = $this->challenges()->wherePivot("validated", 1)->sum("points");
        $score = $score + $this->points()->sum('amount');
        return $score;
    }

    public function points() {
        return $this->hasMany('App\Models\Point');
    }

    /**
     * All the challenges sent to validation by the team
     */
    public function challenges() {
        /**
         * validated can have 3 values :
         *  -1: refused
         *  0: pending
         *  1: accepted
         *  Yep, a boolean should have been used, but my first solution was to use
         *  false: refused
         *  true: accepted
         *  null: pending
         *  and laravel (at least in 5.2) doesn't seem to differenciate null and false
         */
        $pivots = ['submittedOn', 'validated', 'pic_url', 'last_update', 'update_author', 'message'];
        return $this->belongsToMany('App\Models\Challenge', 'challenge_validations')->withPivot($pivots)->where('team_id', '=', $this->id);
    }

    /**
     * Returns all the pending validation : all the challenges where
     * 'validated' attribute is null
     *
     public function getPendingValidations()  {
         return $this->challenges()->wherePivot('validated', 0);
}*/

    /**
     * Return true if the team has already made a submission
     * for the given challenge, no matter whether it's validated or not
     */
    public function hasPendingValidationForChallenge(Challenge $challenge) {
        return count($this->challenges()->where(
            'challenges.id', '=', $challenge->id
        )->wherePivot("validated", 0)->get())>0?true: false;
    }

    /**
     * Check if a challenge (given  by id) has already been validated
     */
    public function hasAlreadyValidatedChallenge(int $challengeId) :bool{
        return count($this->challenges()->where('challenges.id', '=', $challengeId)->wherePivot('validated', true)->get())>0?true:false;
    }


    /**
     * Define the One-to-Many relation with Newcomer;
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newcomers()
    {
        return $this->hasMany('App\Models\User')->where('is_newcomer', '1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faction()
    {
        return $this->belongsTo('App\Models\Faction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ce()
    {
        return $this->hasMany('App\Models\User')->where('is_newcomer', '0')->where('ce', '1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function respo()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Check if this is a TC Team
     * @return boolean true if it's a TC team
     */
    public function isTC() {
        return $this->respo->branch == 'TC' && $this->respo->level < 4;
    }

    /*
     * If it's a tc team, automaticaly tell branch is for TC
     */
    public function getBranchAttribute($value)
    {
        if(!$value && $this->isTC()) {
            return 'TC';
        }
        return $value;
    }
}
