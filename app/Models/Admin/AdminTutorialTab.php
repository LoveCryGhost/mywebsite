<?php

namespace App\Models\Admin;

use App\Models\CoreModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminTutorialTab extends CoreModel
{

    use HasFactory;
    protected $table = "admin_tutorial_tabs";
    protected $primaryKey='id';

    protected $fillable = [
        'is_checked',
        'is_confirmed',
        'released_at',
        "barcode",
        "sort_order",
        'guard',
        'code_method',
        'nav1',
        'nav2',
        'tab1',
        'tab2',
        'tab1_name',
        'tab2_name',
        'include_file_path',
        'contents',
        'file_path',
    ];


    protected $casts = [
        'created_at' => 'date',
        'updated_at' => 'date',
    ];
}
