<?php

namespace App\Http\Controllers\Admin;

use App\Models\Inventory;
use App\Models\Sales;
use App\Models\Showroom;
use App\Models\User;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use phpDocumentor\Reflection\PseudoTypes\False_;

class HomeController
{
    public function index()
    {
        // $inventories = Inventory::with(['media'])->get();
        // $settings1 = [
        //     'chart_title'           => 'All',
        //     'chart_type'            => 'number_block',
        //     'report_type'           => 'group_by_date',
        //     'model'                 => 'App\Models\Inventory',
        //     'group_by_field'        => 'created_at',
        //     'group_by_period'       => 'day',
        //     'aggregate_function'    => 'count',
        //     'filter_field'          => 'created_at',
        //     'group_by_field_format' => 'd/m/Y H:i:s',
        //     'column_class'          => 'col-md-3',
        //     'entries_number'        => '5',
        //     'translation_key'       => 'inventory',
        // ];

        // $settings1['total_number'] = 0;
        // if (class_exists($settings1['model'])) {
        //     $settings1['total_number'] = $settings1['model']::when(isset($settings1['filter_field']), function ($query) use ($settings1) {
        //         if (isset($settings1['filter_days'])) {
        //             return $query->where($settings1['filter_field'], '>=',
        //         now()->subDays($settings1['filter_days'])->format('Y-m-d'));
        //         }
        //         if (isset($settings1['filter_period'])) {
        //             switch ($settings1['filter_period']) {
        //         case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
        //         case 'month': $start = date('Y-m') . '-01'; break;
        //         case 'year': $start = date('Y') . '-01-01'; break;
        //     }
        //             if (isset($start)) {
        //                 return $query->where($settings1['filter_field'], '>=', $start);
        //             }
        //         }
        //     })
        //         ->{$settings1['aggregate_function'] ?? 'count'}($settings1['aggregate_field'] ?? '*');
        // }
        $showrooms = Showroom::orderBy("id", "desc")->get();
        $user = auth()->user();
        if ($user->showroom) {
            $showroom_id = $user->showroom->id;
            $inventories = Inventory::where("showroom_id", $showroom_id)->where("is_active", True)->orderBy("id", "desc")->get();
            $sold_cars = Inventory::where("showroom_id", $showroom_id)->where("is_active", False)->orderBy("id", "desc")->get();
            $sales = Sales::where("showroom_id", $showroom_id)->orderBy("id", "desc")->get();
            $users = User::where('showroom_id', '=', $showroom_id)->orderBy("id", "desc")->get();
            $total_sales = Sales::where("showroom_id", $showroom_id)->sum('price');
        } else {
            $inventories = [];
            $sold_cars = [];
            $users = [];
            $sales = [];
        }
        return view('home', compact('showrooms', 'inventories', 'sold_cars', 'users', 'sales'));
    }
}
