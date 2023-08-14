<?php

namespace App\Models;

use App\Interfaces\ReportInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model implements ReportInterface
{
    use HasFactory;

    public ReportInterface $report;

    public function __construct(ReportInterface $report)
    {
        $this->report = $report;
    }

    public function report()
    {
        return $this->report->report();
    }
}
