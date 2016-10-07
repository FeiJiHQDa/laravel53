<?php
/**
 * Created by PhpStorm.
 * User: HJKLI
 * Date: 2016/9/27
 * Time: 20:11
 */

namespace App\Http\Controllers;

use Validator;
use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

    protected $message = [
    'required' => ':attribute 的字段是必要的。',
    'same'    => ':attribute 和 :other 必须相同。',
    'size'    => ':attribute 必须是 :size。',
    'between' => ':attribute 必须介于 :min - :max。',
    'in'      => ':attribute 必须是以下的类型之一： :values。',
    'min'     => ':attribute 长度要去不服合',
    'integer' => ':attribute 整形',
    ];

    protected $property = [
    'Form.name' => '姓名: ',
    'Form.age' => '年龄: ',
    'Form.sex' => '性别: ',
    ];

    protected$check = [
    'Form.name' => 'required|min:2|max:20',
    'Form.age'  => 'required|integer',
    'Form.sex'  => 'required|integer',
    ];

    public function create(Request $request)
    {

        $formDate = $request->input('Form');
        if ($formDate !== null && $request->isMethod("post")) {

            // 控制器验证
//            $this->validate($request, $check, $message, $property);

//            验证类
            $validator =  Validator::make($request->input(),$this->check, $this->message, $this->property);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            $form = new Form();
            $form->age = $formDate['age'];
            $form->name = $formDate['name'];
            $form->sex = $formDate['sex'];

            if ($form->save()) {
                return redirect('form/index')->with('success', '添加成功');
            } else {
                return redirect()->back();
            }
        }

        $newForm = new Form();
        return view('Form.create', [
            'form' => Form::sex(),
        ]);
    }

    public function index()
    {

        $forms = Form::paginate(4);
        return view('Form.index', [
            'forms' => $forms,
        ]);
    }

    // 详情
    public function detail($id)
    {
        if ($id > 0) {

            $forms = Form::find($id);
            return view('Form.detail', [
                'forms' => $forms,
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function update($id, Request $request) {

        if ($id > 0) {

            $forms = Form::find($id);

            if ($request->isMethod('POST')) {
                $formDate = $request->input('Form');
//            验证类
                $validator =  Validator::make($request->input(),$this->check, $this->message, $this->property);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $forms->age = $formDate['age'];
                $forms->name = $formDate['name'];
                $forms->sex = $formDate['sex'];

                if ($forms->save()) {
                    return redirect('form/index')->with('success', '添加成功');
                } else {
                    return redirect()->back();
                }
            }
            return view('Form.update', [
                'forms' => $forms,
            ]);
        }
        return redirect()->back();
    }

    public function delete($id) {

        $form = Form::find($id);

        if ($form->delete()) {
            return redirect('form/index')->with('success', '删除成功');
        } else {
            return redirect()->back();
        }
    }

}