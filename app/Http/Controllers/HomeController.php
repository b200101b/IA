<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Recruitment;
use App\Models\Review;
use App\Models\Valuation;

use App\Models\feedback;

use Auth;
use DB;
use Session;


class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function index3(){
        return view("3home");
    }
    public function addpost(){
        $r=request(); // get value from input text. Add category
        
        $image=$r->file('postImage');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();
        
        $addPost=Post::create([
            
            'image'=>$imageName,
            'title'=>$r->titleName,
            'description'=>$r->content,
            'price'=>$r->Price,
            'contact'=>$r->Contact,
            'user_id'=>Auth::Id(),   
        ]);
        return redirect()->route('3home');
    }
    public function addRecruitment(){
        $r=request(); // get value from input text. Add category
        
        $image=$r->file('postImage');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();
        
        $addPost=Recruitment::create([
            
            'image'=>$imageName,
            'title'=>$r->titleName,
            'description'=>$r->content,
            'user_id'=>Auth::Id(), 
            'price'=>$r->Price,
            'contact'=>$r->Contact,
        ]);
        return redirect()->route('3home');
    }

    public function addValuation(){
        $r=request(); // get value from input text. Add category
        
        $image=$r->file('ValuationImage');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();
        
        $addValuation=Valuation::create([
            
            'image'=>$imageName,
            'title'=>$r->titleName,
            'description'=>$r->content,
            'style'=>$r->Style,
            'time_spend'=>$r->Spend,
            'area_size'=>$r->size,
            'user_id'=>Auth::Id(),   
        ]);
        Session::flash('Success',"Valuation create successfully!");
        return redirect()->route('3home');
    }


    public function views(){
        $viewPost=Post::all(); // generate SQL select * from categories
        return view('viewPost')->with('posts',$viewPost);
    }
    public function view(){
        $data=DB::table("posts") // generate SQL select * from categories
        ->select('posts.*')
        ->get();
        return view('viewPost')->with('posts',$data);
    }

    public function view3(){
        $data=DB::table("posts") // generate SQL select * from categories
        ->select('posts.*')
        ->where('posts.user_id','=',Auth::Id())
        ->get();
        return view('3home')->with('posts',$data);
    }
    public function viewRecruitment(){
        $data=DB::table("recruitments") // generate SQL select * from categories
        ->select('recruitments.*')
        ->where('recruitments.user_id','=',Auth::Id())
        ->get();
        return view('viewRecruitment')->with('recruitments',$data);
    }

    public function viewMyValuation(){
        $data=DB::table("valuations") // generate SQL select * from categories
        ->select('valuations.*')
        ->where('valuations.user_id','=',Auth::Id())
        ->get();
        return view('viewMyValuation')->with('valuations',$data);
    }
    public function viewValuation(){
        $data=DB::table("valuations") // generate SQL select * from categories
        ->select('valuations.*')
        ->get();
        return view('viewValuation')->with('valuations',$data);
    }
    public function viewpandr(){
        $p=DB::table("posts") // generate SQL select * from categories
        ->select('posts.*')
        ->where('posts.user_id','=',Auth::Id())
        ->get();

        $pALL=DB::table("posts") // generate SQL select * from categories
        ->select('posts.*')
        ->get();

        $r=DB::table("recruitments") // generate SQL select * from categories
        ->select('recruitments.*')
        ->where('recruitments.user_id','=',Auth::Id())
        ->get();
        
        $rALL=DB::table("recruitments") // generate SQL select * from categories
        ->select('recruitments.*')
        ->get();

        $v=DB::table("valuations") // generate SQL select * from categories
        ->select('valuations.*')
        ->where('valuations.user_id','=',Auth::Id())
        ->get();
        $vALL=DB::table("valuations") // generate SQL select * from categories
        ->select('valuations.*')
        ->get();
       
        return view('3home')->with('posts',$p)->with('recruitments',$r)->with('valuations',$v)->with('valuationss',$vALL)->with('postss',$pALL)
        ->with('allRecruitment',$rALL);
    }


    public function viewRecruitment3(){
        $data=DB::table("recruitments") // generate SQL select * from categories
        ->select('recruitments.*')
        ->where('recruitments.user_id','=',Auth::Id())
        ->get();
        return view('3home')->with('recruitments',$data);
    }


    public function edit($id){
        $products=Post::all()->where('id',$id);
        return view('editProduct')->with('products',$products);
                                  
    }

    public function specificCase($id){
        $case=Valuation::all()->where('id',$id);
        return view('GiveFeedback')->with('valuations',$case);
                                  
    }

    public function editRecruitment($id){
        $products=Recruitment::all()->where('id',$id);
        return view('editRecruitment')->with('products',$products);
                                  
    }

    public function update(){
        $r=request(); // get value from input text. Add product 
        // $r request will receive anything submit from the form.
        $products=Post::find($r->id);


        if($r->file('postImage')!= ''){
            $image=$r->file('postImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $products->image=$imageName;
        }

        $products->title=$r->titleName;
        $products->price=$r->Price;
        $products->contact=$r->Contact;
        $products->description=$r->postDescription;
       
        $products->save();
        
        Session::flash('success',"Product update successfully!");
        return redirect()->route('3home');
    }

    public function feed2(){
        $r=request(); // get value from input text. Add product 
        // $r request will receive anything submit from the form.
        $products=Post::find($r->id);

        $products->title=$r->titleName;
        $products->description=$r->postDescription;
       
        $products->save(); 
        return redirect()->route('feedback');
    }
    public function feed1(Request $request){
        $feedback=feedback::create([
            'post_id'=>$request->post_id,
            'user_id'=>Auth::id(),
            'description'=>$request->description,
            'Name'=>$request->Name,
            'Email'=>$request->Email,
            'budget'=>$request->budget,
            'completeTime'=>$request->completeTime,

        ]);
        Session::flash('success',"Give feedback successfully!");

        return redirect()->route('3home');
    }

    public function showFeed($post_id){
      $post=Valuation::where('id',$post_id)->where('user_id',Auth::id())->get();
      $feedbacks=DB::table('feedback')
      ->select('feedback.*')
      ->where('feedback.post_id','=',$post_id)
      ->get();
       
      return view('feedback')->with('valuations', $post)->with('feedback',$feedbacks);
    }
    

    public function updateRecruitment(){
        $r=request(); // get value from input text. Add product 
        // $r request will receive anything submit from the form.
        $products=Recruitment::find($r->id);


        if($r->file('postImage')!= ''){
            $image=$r->file('postImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $products->image=$imageName;
        }

        $products->title=$r->titleName;
        $products->description=$r->postDescription;
        $products->contact=$r->Contact;
        $products->price=$r->Price;



       
        $products->save();
        
        Session::flash('success',"Recruitment update successfully!");
        return redirect()->route('viewRecruitment');
    }

    public function delete($id){
        $deletePost=Post::find($id);
        $deletePost->delete();
        
        return redirect()->route('3home');
    }

    
    public function deleteRecruitment($id){
        $deletePost=Recruitment::find($id);
        $deletePost->delete();
        
        return redirect()->route('3home');
    }
    public function deleteValuation($id){
        $deletePost=Valuation::find($id);
        $deletePost->delete();
        
        return redirect()->route('3home');
    }

    public function reviewstore(Request $request){
        $review = new ReviewRating();
        $review->booking_id = $request->booking_id;
        $review->comments= $request->comment;
        $review->star_rating = $request->rating;
        $review->user_id = Auth::user()->id;
        $review->service_id = $request->service_id;
        $review->save();
        return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
    }


    public function showProduct($id)
{
    $product = \App\Models\Product::findOrFail($id);
    return view('product', compact('product'));
}

}

// Session::flash('success',"Product delete successfully!");