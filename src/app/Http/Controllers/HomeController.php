<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IPostRepository;
use App\Repositories\Interfaces\IContactRepository;
use App\Repositories\Interfaces\ICasesRepository;
use App\Http\Requests\Contact\CreateContactRequest;

class HomeController extends Controller
{
    protected $Post;
    protected $Contact;
    protected $Cases;
    public function __construct(IPostRepository $IPost, IContactRepository $IContact, ICasesRepository $ICases)
    {
        $this->Post = $IPost;
        $this->Cases = $ICases;
        $this->Contact = $IContact;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = $this->Post->LatestPost(3);
        // return view("public.index")->with(['posts'=>$posts]);
        return view("public.index");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogs()
    {
        $posts = $this->Post->GetAllPaginated(12);
        return view("public.news")->with(['active'=>'users', 'subactive'=>'user', 'posts'=>$posts]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Lawyer  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function blog(int $id)
    {
        $model = $this->Post->GetByID($id);
        if ($model == null) {
            return redirect('/news')->with(['error' => 'Blog not found!']);
        }
        return view("public.news")->with(['active'=>'users', 'post'=>$model]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function SaveContact(CreateContactRequest $request)
    {
        // Validated Request
        $data = $request->validated();

        // Save Contact
        $entity = $this->Contact->SaveContact(
            $data['name'],
            $data['email'],
            $data['subject'],
            $data['message']
        );

        // Check Contact created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while sending your message, Please try again!']);
        }

        return redirect("/contact")->with(['success' => 'Your message has been received! We will get back to you as soon as possible']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view("public.contact")->with(['active'=>'users', 'subactive'=>'user']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        return view("public.payment");
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function courses()
    {
        $cases = $this->Cases->GetAllPaginated(12);
        return view("public.courses")->with(['active'=>'users', 'subactive'=>'user', 'cases'=>$cases]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course()
    {
        $cases = $this->Cases->GetAllPaginated(12);
        return view("public.course")->with(['active'=>'users', 'subactive'=>'user', 'cases'=>$cases]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function practice()
    {
        return view("public.practice")->with(['active'=>'users', 'subactive'=>'user']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view("public.about")->with(['active'=>'users', 'subactive'=>'user']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        return view("public.account")->with(['active'=>'users', 'subactive'=>'user']);
    }
}
