<?php

namespace App\DataTables;

use Modules\Users\Entities\Inventory;
use Modules\Users\Entities\Items;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InventoryDatatables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'inventorydatatables.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\InventoryDatatables $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Inventory $model)
    {
       // $data=Inventory::select();
      //  return $this->applyScopes($data);
        return $model->newQuery()->with(['item','brand','category']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                     ->setTableId('inventorydatatables-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
            //         ->addAction(['with'=>'80px'])
            // ->dom('Bfrtip')
            //         ->orderBy(1)
                //    ->buttons(
                //        Button::make('create'),
                //        Button::make('export'),
                //        Button::make('print'),
                //        Button::make('reset'),
                //        Button::make('reload')
                //    )

            ->parameters([
                'dom'          => 'Bfrtip',
                'buttons'      => ['export', 'print', 'reset', 'reload'],
                'initComplete' => "function () {
                            this.api().columns().every(function () {
                                var column = this;
                                var input = document.createElement(\"input\");
                                $(input).appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }",
            ]);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'item_id'=>new Column(['title'=>'Items','data'=>'item.name','name'=>'item.name']),
            'brand_id'=>new Column(['title'=>'Brands','data'=>'brand.name','name'=>'brand.name']),
           'category_id'=>new Column(['title'=>'Categories','data'=>'category.name','name'=>'category.name']),
            Column::make('model'),
            Column::make('serial'),
            Column::make('qty'),
            'item_unit_price'=>new Column(['title'=>'Unit Price','data'=>'item_unit_price','name'=>'item_unit_price']),
        //    Column::computed('action')
        //    ->exportable(false)
        //    ->printable(false)
        //    ->width(60)
        //    ->addClass('text-center'),
        'action'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'InventoryDatatables_' . date('YmdHis');
    }
}
