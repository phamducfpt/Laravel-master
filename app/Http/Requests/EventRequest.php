<?php

namespace App\Http\Requests;

use App\Enums\EventStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function  rules()
    {
        return [
            'eventName'=>['required','after:min:20'],
            'bandName'=>['required'],
            'startDate'=>['required','after:today'],
            'endDate'=>['required','after:startDate'],
            'portfolio'=>['required'],
            'ticketPrice'=>['required','min:1'],
            'status'=>['required', 'min:0','max:3'],
        ];
    }
    public function massages(){
        return[
            'eventName.required'=>'Trường eventName Bắt buộc phải nhập',
            'eventName.min'=>'Trường eventName Bắt buộc phải lớn hơn 20 kí tự',
            'bandName.required'=>'vui lòng nhập tên ban nhạc',
            'startDate.required'=>'vui long nhập nagyf bắt đầu sự kiện',
            'startDate.after'=>'ngày bắt đầu phỉa sau nagyf hiện tại',
            'endDate.required'=>'vui lòng nhập nagyf kết thúc sự kiện',
            'endDate.after'=>'ngày kết thúc phải sau ngày bắt đầu',
            'portfolio.required'=>'vui lòng nhaapj danh mục đầu tư',
            'ticketPrice.required'=>'vui lòng nhập giá vé',
            'ticketPrice.min'=>'giá vé tối thiểu phải 1$',
            'status.required'=>'vui long chon các trạng thái trên',
            'status.min'=>'trạng thái nhỏ nhất là 0',
            'status.mã'=>'trạng thái lớn nhất là 3',
        ];
    }
    //    public function withValinater($valinater){
    //        $valinater->after(function ($validater){
    //            if ($this->get('name')=='Chinh'){
    //                $validater->error()->add('name','khong the nhap ten nay');
    //            }
    //        });
    //    }
}
