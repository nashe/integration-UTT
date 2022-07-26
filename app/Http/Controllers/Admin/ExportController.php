<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Exports\ExportReferralsToNewcomers;
use App\Http\Controllers\Admin\Exports\ExportNewcomersToReferrals;
use App\Http\Controllers\Admin\Exports\ExportTeams;
use App\Http\Controllers\Admin\Exports\ExportStudents;
use App\Http\Controllers\Admin\Exports\ExportRawStudents;
use App\Http\Controllers\Admin\Exports\ExportPerms;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Team;
use App\Models\Faction;
use App\Models\Newcomer;
use App;
use View;
use Auth;
use Excel;
use Request;
use Session;
use EtuUTT;
use Config;

/**
 * Export actions
 */
class ExportController extends Controller
{
    /**
     * Export pages.
     *
     * @return Response
     */
    public function getExports()
    {
        return View::make('dashboard.exports');
    }

    /**
     * Export the referrals and the related newcomers into a CSV file.
     *
     * @return string
     */
    public function getExportReferralsToNewcomers()
    {
        return Excel::download(new ExportReferralsToNewcomers, 'parrains.xlsx');
    }

    /**
     * Export the newcomers.
     *
     * @return string
     */
    public function getExportNewcomersToReferrals()
    {
        return Excel::download(new ExportNewcomersToReferrals, 'nouveaux.xlsx');
    }

    /**
     * Export the teams and CE into a XLS file.
     *
     * @return string
     */
    public function getExportTeams()
    {
        return Excel::download(new ExportTeams, 'equipes.xlsx');
    }

    /**
     * Export all the users wither their contact informations
     *
     * @return string
     */
    public function getExportStudents()
    {
        return Excel::download(new ExportStudents, 'etudiants.xlsx');
    }

    /**
     * Export all raw data about students
     *
     * @return string
     */
    public function getExportRawUsers()
    {
        return Excel::download(new ExportRawStudents, 'etudiantsBrut.xlsx');
    }

    /**
     * Export duty periods
     *
     * @return string
     */
    public function getPerms()
    {
        return Excel::download(new ExportPerms, 'perms.xlsx');
    }
}
