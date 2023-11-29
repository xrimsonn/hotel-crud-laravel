<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'client_id' => ['required', 'integer'],
      'order_date' => ['required', 'date'],
      'order_cost' => ['required', 'integer'],
      'ordered_dishes' => 'required',
    ];
  }

  protected function prepareForValidation()
  {
    $this->merge([
      'client_id' => strip_tags($this->client_id),
      'order_date' => strip_tags($this->order_date),
      'order_cost' => strip_tags($this->order_cost),
      'ordered_dishes' => strip_tags($this->ordered_dishes),
    ]);
  }
}
