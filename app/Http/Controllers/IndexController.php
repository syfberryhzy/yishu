<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemInfo;
use App\Models\Post;
use App\Models\Record;
use App\Models\MemberInfo;
use App\Models\Category;

class IndexController extends Controller
{
    //AppProvider里自动加载传递公司信息SystemInfo
    public function index()
    {
        $title = '首页';
        $data = Post::where('category_id', Post::WEBINDEX_ID)->where('status', Post::STATUS_ON)->first();
        return view('index', compact('title', 'data'));
    }
    public function case()
    {
        $title = '案例';
        $childs = Category::where('parent_id', Category::CASE_ID)->pluck('id');
        $datas = Post::whereIn('category_id', $childs)->where('status', Post::STATUS_ON)->get();
        dd($datas);
        return view('cases', compact('title', 'datas'));
    }

    public function caseInfo($id)
    {
        $title = '案例详情';
        $childs = Category::where('parent_id', Category::CASE_ID)->pluck('id');
        $data = Post::whereIn('category_id', $childs)->where('status', Post::STATUS_ON)->where('id', $id)->first();
        return view('case_info', compact('title', 'data'));
    }

    public function award()
    {
        $title = '获奖记录';
        $datas = Record::orderBy('id', 'desc')->get();
        dd($datas);
        return view('awards', compact('title', 'datas'));
    }

    public function about()
    {
        $title = '关于一树';
        $company = Post::where('category_id', Category::COMPANY_ID)->first();
        $teams = Post::where('category_id', Category::TEAM_ID)->get();
        $members = MemberInfo::orderBy('id', 'desc')->get();
        // dd($members);
        return view('about', compact('title', 'company', 'teams', 'members'));
    }

    public function news()
    {
        $title = '观点咨询';//分页
        $news = Post::where('category_id', Category::NEW_IDS)->where('status', Post::STATUS_ON);
        $datas = $news->paginate(5);
        return view('news', compact('title', 'datas'));
    }

    public function newsInfo($id)
    {
        $title = '观点咨询详情';
        $data = Post::where('category_id', Category::NEW_IDS)->where('status', Post::STATUS_ON)->where('id', $id)->first();
        return view('news_info', compact('title', 'data'));
    }

    public function contact()
    {
        $title = '联系我们';
        dd($data);
        return view('contact_us', compact('title'));
    }
}
