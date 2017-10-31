<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemInfo;
use App\Models\Post;
use App\Models\Record;
use App\Models\Category;

class IndexController extends Controller
{

    // public $config = [];

    public function __construct(SystemInfo $config)
    {
        // $this->config = $config;
        // dd($this->config)
    }
    public function index()
    {
        $title = '首页';
        $data = Post::where('category_id', Post::WEBINDEX_ID)->where('status', Post::STATUS_ON)->first();
        return view('index', compact('title', 'data'));
    }
    public function case()
    {
        $title = '案例';
        $datas = Post::where('category_id', Post::WEBINDEX_ID)->where('status', Post::STATUS_ON)->get();
        return view('cases', compact('title'));
    }

    public function caseInfo($id)
    {
        $title = '案例详情';
        $data = Post::find($id);
        return view('case_info', compact('title'));
    }

    public function award()
    {
        $title = '获奖记录';
        $datas = Record::orderBy('id', 'desc')->get();
        // dd($datas);
        return view('awards', compact('title', 'datas'));
    }

    // public function awardInfo()
    // {
    //     $title = '获奖记录';
    //     return view('awards', compact('title'));
    // }
    public function about()
    {
        $title = '关于一树';
        return view('about', compact('title'));
    }

    public function news()
    {
        $title = '观点咨询';//分页
        return view('news', compact('title'));
    }

    public function newsInfo($id)
    {
        $title = '观点咨询详情';
        $data = Post::find($id);
        return view('news_info', compact('title'));
    }

    public function contact()
    {
        $title = '联系我们';
        return view('contact_us', compact('title'));
    }
}
