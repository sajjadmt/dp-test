<?php

namespace App\Models;

use App\Interfaces\ReportInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfReport extends Model implements ReportInterface
{
    use HasFactory;

    public function report()
    {
        echo 'Report as PDF';
    }
}
