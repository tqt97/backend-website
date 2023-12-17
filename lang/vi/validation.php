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

    'accepted' => 'Trường :attribute field must be accepted.',
    'accepted_if' => 'Trường :attribute field must be accepted when :other is :value.',
    'active_url' => 'Trường :attribute field must be a valid URL.',
    'after' => 'Trường :attribute field must be a date after :date.',
    'after_or_equal' => 'Trường :attribute field must be a date after or equal to :date.',
    'alpha' => 'Trường :attribute field must only contain letters.',
    'alpha_dash' => 'Trường :attribute field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'Trường :attribute field must only contain letters and numbers.',
    'array' => 'Trường :attribute field must be an array.',
    'ascii' => 'Trường :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'Trường :attribute field must be a date before :date.',
    'before_or_equal' => 'Trường :attribute field must be a date before or equal to :date.',
    'between' => [
        'array' => 'Trường :attribute field must have between :min and :max items.',
        'file' => 'Trường :attribute field must be between :min and :max kilobytes.',
        'numeric' => 'Trường :attribute field must be between :min and :max.',
        'string' => 'Trường :attribute field must be between :min and :max characters.',
    ],
    'boolean' => 'Trường :attribute field must be true or false.',
    'can' => 'Trường :attribute field contains an unauthorized value.',
    'confirmed' => 'Xác nhận :attribute không khớp',
    'current_password' => 'Trường password is incorrect.',
    'date' => 'Trường :attribute field must be a valid date.',
    'date_equals' => 'Trường :attribute field must be a date equal to :date.',
    'date_format' => 'Trường :attribute field must match the format :format.',
    'decimal' => 'Trường :attribute field must have :decimal decimal places.',
    'declined' => 'Trường :attribute field must be declined.',
    'declined_if' => 'Trường :attribute field must be declined when :other is :value.',
    'different' => 'Trường :attribute field and :other must be different.',
    'digits' => 'Trường :attribute field must be :digits digits.',
    'digits_between' => 'Trường :attribute field must be between :min and :max digits.',
    'dimensions' => 'Trường :attribute field has invalid image dimensions.',
    'distinct' => 'Trường :attribute field has a duplicate value.',
    'doesnt_end_with' => 'Trường :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'Trường :attribute field must not start with one of the following: :values.',
    'email' => 'Trường :attribute field must be a valid email address.',
    'ends_with' => 'Trường :attribute field must end with one of the following: :values.',
    'enum' => 'Trường selected :attribute is invalid.',
    'exists' => 'Trường selected :attribute is invalid.',
    'extensions' => 'Trường :attribute field must have one of the following extensions: :values.',
    'file' => 'Trường :attribute field must be a file.',
    'filled' => 'Trường :attribute field must have a value.',
    'gt' => [
        'array' => 'Trường :attribute field must have more than :value items.',
        'file' => 'Trường :attribute field must be greater than :value kilobytes.',
        'numeric' => 'Trường :attribute field must be greater than :value.',
        'string' => 'Trường :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'Trường :attribute field must have :value items or more.',
        'file' => 'Trường :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'Trường :attribute field must be greater than or equal to :value.',
        'string' => 'Trường :attribute field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'Trường :attribute field must be a valid hexadecimal color.',
    'image' => 'Trường :attribute field must be an image.',
    'in' => 'Trường selected :attribute is invalid.',
    'in_array' => 'Trường :attribute field must exist in :other.',
    'integer' => 'Trường :attribute field must be an integer.',
    'ip' => 'Trường :attribute field must be a valid IP address.',
    'ipv4' => 'Trường :attribute field must be a valid IPv4 address.',
    'ipv6' => 'Trường :attribute field must be a valid IPv6 address.',
    'json' => 'Trường :attribute field must be a valid JSON string.',
    'lowercase' => 'Trường :attribute field must be lowercase.',
    'lt' => [
        'array' => 'Trường :attribute field must have less than :value items.',
        'file' => 'Trường :attribute field must be less than :value kilobytes.',
        'numeric' => 'Trường :attribute field must be less than :value.',
        'string' => 'Trường :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'Trường :attribute field must not have more than :value items.',
        'file' => 'Trường :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'Trường :attribute field must be less than or equal to :value.',
        'string' => 'Trường :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'Trường :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'Trường :attribute field must not have more than :max items.',
        'file' => 'Trường :attribute field must not be greater than :max kilobytes.',
        'numeric' => 'Trường :attribute field must not be greater than :max.',
        'string' => 'Trường :attribute field must not be greater than :max characters.',
    ],
    'max_digits' => 'Trường :attribute field must not have more than :max digits.',
    'mimes' => 'Trường :attribute field must be a file of type: :values.',
    'mimetypes' => 'Trường :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'Trường :attribute field must have at least :min items.',
        'file' => 'Trường :attribute field must be at least :min kilobytes.',
        'numeric' => 'Trường :attribute field must be at least :min.',
        'string' => 'Trường :attribute tối thiếu :min ký tự.',
    ],
    'min_digits' => 'Trường :attribute field must have at least :min digits.',
    'missing' => 'Trường :attribute field must be missing.',
    'missing_if' => 'Trường :attribute field must be missing when :other is :value.',
    'missing_unless' => 'Trường :attribute field must be missing unless :other is :value.',
    'missing_with' => 'Trường :attribute field must be missing when :values is present.',
    'missing_with_all' => 'Trường :attribute field must be missing when :values are present.',
    'multiple_of' => 'Trường :attribute field must be a multiple of :value.',
    'not_in' => 'Trường selected :attribute is invalid.',
    'not_regex' => 'Trường :attribute field format is invalid.',
    'numeric' => 'Trường :attribute field must be a number.',
    'password' => [
        'letters' => 'Trường :attribute field must contain at least one letter.',
        'mixed' => 'Trường :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'Trường :attribute field must contain at least one number.',
        'symbols' => 'Trường :attribute field must contain at least one symbol.',
        'uncompromised' => 'Trường given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'Trường :attribute field must be present.',
    'present_if' => 'Trường :attribute field must be present when :other is :value.',
    'present_unless' => 'Trường :attribute field must be present unless :other is :value.',
    'present_with' => 'Trường :attribute field must be present when :values is present.',
    'present_with_all' => 'Trường :attribute field must be present when :values are present.',
    'prohibited' => 'Trường :attribute field is prohibited.',
    'prohibited_if' => 'Trường :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'Trường :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'Trường :attribute field prohibits :other from being present.',
    'regex' => 'Trường :attribute field format is invalid.',
    'required' => 'Trường :attribute không được để trống',
    'required_array_keys' => 'Trường :attribute field must contain entries for: :values.',
    'required_if' => 'Trường :attribute field is required when :other is :value.',
    'required_if_accepted' => 'Trường :attribute field is required when :other is accepted.',
    'required_unless' => 'Trường :attribute field is required unless :other is in :values.',
    'required_with' => 'Trường :attribute field is required when :values is present.',
    'required_with_all' => 'Trường :attribute field is required when :values are present.',
    'required_without' => 'Trường :attribute field is required when :values is not present.',
    'required_without_all' => 'Trường :attribute field is required when none of :values are present.',
    'same' => 'Trường :attribute field must match :other.',
    'size' => [
        'array' => 'Trường :attribute field must contain :size items.',
        'file' => 'Trường :attribute field must be :size kilobytes.',
        'numeric' => 'Trường :attribute field must be :size.',
        'string' => 'Trường :attribute field must be :size characters.',
    ],
    'starts_with' => 'Trường :attribute field must start with one of the following: :values.',
    'string' => 'Trường :attribute field must be a string.',
    'timezone' => 'Trường :attribute field must be a valid timezone.',
    'unique' => 'Trường :attribute đã tồn tại.',
    'uploaded' => 'Trường :attribute failed to upload.',
    'uppercase' => 'Trường :attribute field must be uppercase.',
    'url' => 'Trường :attribute field must be a valid URL.',
    'ulid' => 'Trường :attribute field must be a valid ULID.',
    'uuid' => 'Trường :attribute field must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
