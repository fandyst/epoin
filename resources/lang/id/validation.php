<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'Isian :attribute hanya berisi huruf.',
    'alpha_dash'           => 'Isian :attribute hanya berisi huruf, angka, dan tanda hubung -.',
    'alpha_num'            => 'Isian :attribute hanya berisi huruf dan angka.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'Isian :attribute bukan tanggal yang benar.',
    'date_format'          => 'Isian :attribute tidak cocok dengan format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'Isian :attribute harus berupa alamat email yang benar.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'Isian :attribute harus berupa gambar.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'Isian :attribute harus berupa integer.',
    'ip'                   => 'Isian :attribute harus berupa IP address.',
    'json'                 => 'Isian :attribute harus berupa JSON string.',
    'max'                  => [
        'numeric' => 'Isian :attribute tidak boleh lebih dari :max.',
        'file'    => 'Isian :attribute tidak boleh lebih dari :max kilobytes.',
        'string'  => 'Isian :attribute tidak boleh lebih dari :max karakter.',
        'array'   => 'Isian :attribute tidak boleh lebih dari :max item.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'Isian :attribute setidaknya minimal :min.',
        'file'    => 'Isian :attribute setidaknya minimal :min kilobytes.',
        'string'  => 'Isian :attribute setidaknya minimal :min karakter.',
        'array'   => 'Isian :attribute setidaknya minimal :min item.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'Isian :attribute harus berupa angka.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Format isian :attribute tidak sesuai.',
    'required'             => 'Isian :attribute harus diisi.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'Isian :attribute harus menggunakan zona waktu yang tepat.',
    'unique'               => 'Isian :attribute sudah digunakan sebelumnya.',
    'url'                  => 'Isian :attribute harus berformat url.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
