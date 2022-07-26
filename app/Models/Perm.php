<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\PermType;

class Perm extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
  /**
   * @var string
   */
  public $table = 'perms';

  public $fillable = ['id', 'start', 'end', 'description', 'place', 'nbr_permanenciers', 'perm_type_id', 'open', 'pre_open'];

  public $hidden = [
    'created_at',
    'updated_at',
  ];

  /**
   * Define constraints of the Model's attributes for store action
   * from web requests
   *
   * @return array
   */
  public static function webStoreRules()
  {
    return [
      'start_date' => 'required|date|date_format:Y-m-d|before_or_equal:end_date',
      'start_hour'=> 'required|date_format:H:i',
      'end_date'=> 'required|date|date_format:Y-m-d|after_or_equal:start_date',
      'end_hour'=> 'required|date_format:H:i',
      'open_date'=> 'date|date_format:Y-m-d',
      'open_hour'=> 'date_format:H:i',
      'pre_open_date'=> 'date|date_format:Y-m-d',
      'pre_open_hour'=> 'date_format:H:i',
      'description' => 'required|string',
      'place' => 'required|string',
      'nbr_permanenciers' => 'required|integer',
      'respos' => 'array',
      'respos.*' => 'exists:users,id',
      'permanenciers' => 'array',
      'permanenciers.*' => 'exists:users,id',
      'type' => 'exists:perm_types,id'
    ];
  }

  /**
   * Define constraints of the Model's attributes for update action
   * from web requests
   *
   * @return array
   */
  public static function webUpdateRules()
  {
    return Perm::webStoreRules();
  }

  /**
   * Define constraints of the Model's attributes for store action
   *
   * @return array
   */
  public static function addRespoRules()
  {
    return [
      'uid' => 'required|min:36|max:36|exists:users,qrcode'
    ];
  }

  /**
   * The respo of the PermType.
   */
  public function respos()
  {
    return $this->belongsToMany(User::class, 'perm_users', 'perm_id', 'user_id')->wherePivot('respo', true);
  }

  /**
   * Define constraints of the Model's attributes for store action
   *
   * @return array
   */
  public static function addPermanencierRules()
  {
    return [
      'uid' => 'required|min:36|max:36|exists:users,qrcode'
    ];
  }

  /**
   * The respos of the Perm.
   */
  public function permanenciers()
  {
    return $this->belongsToMany(User::class, 'perm_users', 'perm_id', 'user_id')
      ->wherePivot('respo', false)
      ->withPivot('presence')
      ->withPivot('pointsPenalty')
      ->withPivot('commentary')
      ->withPivot('absence_reason');
  }

  /**
   * Define the One-to-Many relation with PermType;
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function type()
  {
      return $this->belongsTo(PermType::class, 'perm_type_id', 'id');
  }


  /**
	 * Define constraints of the Model's attributes for store action
     * from api requests
	 *
	 * @return array
	 */
	public static function apiJoinRules() {
		return [
			'userId' => 'required|exists:users,id'
		];
	}

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->type->name;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return false;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        $d = new DateTime();
        return $d->setTimestamp($this->start);
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        $d = new DateTime();
        return $d->setTimestamp($this->end);
    }

    public function getEventOptions()
    {
        return [
            'color' => '#c8c8c8',
            'url' => url()->route('perm.users', ['id' => $this->id ])
        ];
    }
}
