<?php

namespace App\Http\Livewire;

use App\Models\JobListing;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\{Column, Action, DateColumn};
use Mediconesystems\LivewireDatatables\Traits\CanPinRecords;

class JobsTable extends LivewireDatatable
{
    use CanPinRecords;

    public $model = JobListing::class;

    public $complex = true;

    public function builder()
    {
        return JobListing::query();
    }

    public function buildActions()
    {
        return [

            // Action::value('edit')->label('Edit Selected')->group('Default Options')->callback(function ($mode, $items) {
            //     // $items contains an array with the primary keys of the selected items
            // }),

            // Action::value('update')->label('Update Selected')->group('Default Options')->callback(function ($mode, $items) {
            //     // $items contains an array with the primary keys of the selected items
            // }),

            Action::groupBy('Export Options', function () {
                return [
                    Action::value('csv')->label('Export CSV')->export('SalesOrders.csv'),
                    Action::value('html')->label('Export HTML')->export('SalesOrders.html'),
                    Action::value('xlsx')->label('Export XLSX')->export('SalesOrders.xlsx')
                        // ->styles($this->exportStyles)->widths($this->exportWidths)
                ];
            }),
        ];
    }

    public function columns()
    {
        return [
            Column::name('title')
                ->label('title')
                ->searchable(),

            Column::name('description')
                ->truncate(30)->searchable(),

            Column::name('level')
                ->label('designation')
                ->filterable(JobListing::get_job_levels()),

            Column::name('type')
                ->label('category')
                ->filterable(JobListing::get_job_types()),

            Column::name('status')
                ->label('status')
                ->filterable(JobListing::get_all_job_status()),

            Column::name('qualification')
                ->label('qualification')
                ->searchable()
                ->editable(),

            Column::name('district')
                ->label('district')
                ->filterable(['']),

            Column::name('state')
                ->label('state')
                ->filterable(JobListing::get_all_job_states()),

            Column::delete()
                ->label('delete')
                ->hideable(),
        ];
    }
}
