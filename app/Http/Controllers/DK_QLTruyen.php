<?php

namespace App\Http\Controllers;

use App\truyen;
use Illuminate\Http\Request;

class DK_QLTruyen extends Controller
{
   function chiTietTruyen($id){
       $truyen = truyen::find($id);
       $charttruyens = truyen::all();

       return view('Khach.XemChiTietTruyen',['truyen'=>$truyen]);
   }


   public function layTruyenTheoMa($id=null)
   {
   	
   }

   public function layTruyenTheoTen($id=null)
   {
   	
   }

   public function layTruyenTheoTheLoai($id=null)
   {
   	
   }

   public function layTruyenTheoNhom($id=null)
   {
   	
   }
   public function layTatCaTruyen()
   {
   	
   }

   public function docTruyen($idTruyen,$idChuong)
   {
   	
   }


   public function chiaSe($id=null)
   {
   	
   }


}