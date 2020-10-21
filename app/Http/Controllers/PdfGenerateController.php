<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App;
use PDF;

class PdfGenerateController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview()
    {
        $headerHtml = view()->make('pdf.header')->render();
        $footerHtml = view()->make('pdf.footer')->render();

        $pdf = PDF::loadView('pdf.invoice')
            ->setOption('margin-top', '15')
            ->setOption('margin-bottom', '15')
            ->setOption('header-html', $headerHtml)
            ->setOption('footer-html', $footerHtml);
        return $pdf->inline('test.pdf');
    }

    public function generateFakePara () {
        $headerHtml = view()->make('pdf.header')->render();
        $footerHtml = view()->make('pdf.footer')->render();

        $pdf = PDF::loadView('pdf.paragraph')
            ->setOption('header-html', $headerHtml)
            ->setOption('footer-html', $footerHtml);
        return $pdf->inline('test.pdf');
    }

    public function generateFakeTable () {
        $list = DB::select("exec hospital.jjm.admit_report ?,?",['01-01-2020','01-21-2020']);

        $headerHtml = view()->make('pdf.header')->render();
        //$footerHtml = view()->make('pdf.footer')->render();

        $pdf = PDF::loadView('pdf.table', ['list'=>$list])
            ->setOption('header-html', $headerHtml);
            //->setOption('footer-html', $footerHtml);
        return $pdf->inline('test.pdf');
    }

    public function generatePDF (Request $request) {
        //$start = date_format(strtotime(str_replace('-', '/', $request->start)) ,"m-d-Y");
       // $end = date_format(strtotime(str_replace('-', '/', $request->end)) ,"m-d-Y");
       $list = DB::select("exec hospital.jjm.admit_report ?,?",[$request->start, $request->end]);

       $headerHtml = view()->make('pdf.header', $request)->render();
       //$footerHtml = view()->make('pdf.footer')->render();

       $pdf = PDF::loadView('pdf.table', ['list'=>$list])
           ->setOption('header-html', $headerHtml);
           //->setOption('footer-html', $footerHtml);
       return $pdf->inline('test.pdf');
    }
}