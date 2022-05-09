<?php

namespace App\Http\Middleware;

use App\Models\Product;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductEditLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Xem lịch sử
        // dd($request->ip());
        // dd(Auth::user()->id);
        // dd(Carbon::now());
        // DB::table('product_history')->insert([
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'cate_id' => $request->cate_id,
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_by' => Auth::id(),
        //     'price' => $request->price,
        //     'quantity' => $request->quantity
        // ]);
        
        // Log::info("Product Id: " . $request->id 
        //             . " - user: " . Auth::id() 
        //             . ' - time: ' . Carbon::now()->format('Y-m-d H:i:s'));


        $obj = Product::find($request->id);
        if($obj->created_by != Auth::id()){
            return redirect()->back()->with('msg', 'Bạn không có quyền sửa sản phẩm này');
        }
        return $next($request);
    }
}
