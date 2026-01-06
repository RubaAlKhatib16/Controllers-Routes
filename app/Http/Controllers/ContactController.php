<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public static $messages = [];

    public function create()
    {
        return view('contact.create');
    }
/*Task 3 */
    /*public function store(Request $request)
    {
        $name  = $request->name;
        $email = $request->email;
        $msg   = $request->message;

        return view('contact.result', compact('name','email','msg'));
    }*/

        /*Task 4*/
     public function store(Request $request)
    {
        $data = [
            'name'   => $request->name,
            'email'  => $request->email,
            'msg'    => $request->message
        ];

        self::$messages[] = $data;

        return redirect('/contact/result');
        // أو:
        // return redirect()->route('contact.result');
    }

    public function result()
    {
        return view('contact.result', [
            'messages' => self::$messages
        ]);
    }
}


/* عند استخدام redirect مع رابط مباشر فإن Laravel يقوم بإرسال المستخدم إلى العنوان كما هو مكتوب بالنص، لذلك إذا تغيّر الرابط في المستقبل يجب تعديله يدويًا في جميع الأماكن.
بينما redirect()->route يعتمد على اسم الراوت وليس الرابط نفسه، مما يجعل الكود أكثر تنظيمًا ومرونة، خصوصًا في المشاريع الكبيرة.*/

