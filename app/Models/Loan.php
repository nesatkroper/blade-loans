<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';
    protected $primaryKey = 'loan_id';
    protected $fillable = [
        'customer_id',
        'employee_id',
        'installments',
        'rate',
        'principle',
        'category_id',
        'start_date',
        'installment_type',
        'memo',
    ];
}
