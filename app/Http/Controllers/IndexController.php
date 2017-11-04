<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemInfo;
use App\Models\Post;
use App\Models\Record;
use App\Models\MemberInfo;
use App\Models\Category;
use App\Models\Banner;
use Carbon\Carbon;

class IndexController extends Controller
{
    //AppProvider里自动加载传递公司信息SystemInfo
    public function index()
    {
        $banner = Banner::where('category_id', Category::WEBINDEX_ID)->first();
        $data = Post::where('category_id', Post::WEBINDEX_ID)->where('status', Post::STATUS_ON)->first();
        return view('index', compact('data', 'banner'));
    }
    public function case()
    {
        $banner = Banner::where('category_id', Category::CASE_ID)->first();
        $childs = Category::where('parent_id', Category::CASE_ID)->pluck('id');
        $datas = Post::whereIn('category_id', $childs)->where('status', Post::STATUS_ON)->get();
        // dd($datas);
        return view('cases', compact('datas', 'banner'));
    }

    public function caseInfo($id)
    {
        $banner = Banner::where('category_id', Category::CASE_ID)->first();
        $childs = Category::where('parent_id', Category::CASE_ID)->pluck('id');
        $data = Post::whereIn('category_id', $childs)->where('status', Post::STATUS_ON)->where('id', $id)->first();
        return view('case_info', compact('data', 'banner'));
    }

    public function award()
    {
        $banner = Banner::where('category_id', Category::AWARD_ID)->first();
        $post = Post::find(Post::AWARD_ID);
        $datas = Record::orderBy('id', 'asc')->get();
        // dd($datas);
        return view('awards', compact('post', 'datas', 'banner'));
    }

    public function about()
    {
        $banner = Banner::where('category_id', Category::ABOUT_ID)->first();
        $company = Post::where('category_id', Category::COMPANY_ID)->first();
        $teams = Post::where('category_id', Category::TEAM_ID)->get();
        $members = MemberInfo::orderBy('id', 'desc')->get();
        return view('about', compact('company', 'teams', 'members', 'banner'));
    }

    public function news()
    {
        $banner = Banner::where('category_id', Category::NEW_IDS)->first();
        $news = Post::where('category_id', Category::NEW_IDS)->where('status', Post::STATUS_ON)->paginate(5);

        return view('news', compact('news', 'banner'));
    }

    public function newsInfo($id)
    {
        $banner = Banner::where('category_id', Category::NEW_IDS)->first();
        $data = Post::where('category_id', Category::NEW_IDS)->where('status', Post::STATUS_ON)->where('id', $id)->first();
        $data->description = mb_substr(  $data->description, 0, 10).'...';
        return view('news_info', compact('data', 'banner'));
    }

    public function contact()
    {
        // dd($data);
        $banner = Banner::where('category_id', Category::CONTACT_ID)->first();
        return view('contact_us', compact('banner'));
    }
}
