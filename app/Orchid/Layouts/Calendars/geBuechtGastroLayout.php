<?php

namespace App\Orchid\Layouts\Calendars;

use Orchid\Screen\TD;
use App\Models\geBuechtGastro;
use Orchid\Screen\Layouts\Table;


class geBuechtGastroLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'geBuecht';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('geBuecht_id', __('ID'))
            ->sort()
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->id;                
                }),
            TD::set('geBuecht_firstname', __('Vorname'))
                ->cantHide()
                ->render(function (geBuechtGastro $geBuecht) {
                    return $geBuecht->firstname;                
                }),
            TD::set('geBuecht_lastname', __('Nachname'))
            ->cantHide()
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->name;                
            }),
            TD::set('geBuecht_email', __('Email'))
            ->cantHide()
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->email;                
            }),
            TD::set('geBuecht_telefon', __('Tel.'))
            ->cantHide()
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->tel;                
            }),
            TD::set('geBuecht_size', __('Tischgrösse'))
            ->cantHide()
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->size;                
            }),
            TD::set('geBuecht_timeslot', __('Zeitfenster'))
            ->cantHide()
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->timeslot;                
            }),
            TD::set('geBuecht_remark', __('Bemerkungen'))
            ->cantHide()
            ->width('150px')
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->remarks;                
            }),
            TD::set('geBuecht_day', __('Datum'))
            ->cantHide()
            ->render(function (geBuechtGastro $geBuecht) {
                return $geBuecht->created_at->format('d.m.Y');                
            }),
        ];
    }
}
