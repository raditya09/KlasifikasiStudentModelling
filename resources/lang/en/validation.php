<?php

return [
    'accepted' => 'Atribut :attribute harus diterima.',
    'accepted_if' => 'Atribut :attribute harus diterima ketika :other adalah :value.',
    'active_url' => 'Atribut :attribute bukan URL yang valid.',
    'after' => 'Atribut :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Atribut :attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => 'Atribut :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Atribut :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Atribut :attribute hanya boleh berisi huruf dan angka.',
    'array' => 'Atribut :attribute harus berupa larik (array).',
    'before' => 'Atribut :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Atribut :attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => 'Atribut :attribute harus antara :min dan :max.',
        'file' => 'Atribut :attribute harus antara :min dan :max kilobita.',
        'string' => 'Atribut :attribute harus antara :min dan :max karakter.',
        'array' => 'Atribut :attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean' => 'Atribut :attribute harus benar atau salah.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Atribut :attribute bukan tanggal yang valid.',
    'date_equals' => 'Atribut :attribute harus tanggal yang sama dengan :date.',
    'date_format' => 'Atribut :attribute tidak cocok dengan format :format.',
    'declined' => 'Atribut :attribute harus ditolak.',
    'declined_if' => 'Atribut :attribute harus ditolak ketika :other adalah :value.',
    'different' => 'Atribut :attribute dan :other harus berbeda.',
    'digits' => 'Atribut :attribute harus :digits digit.',
    'digits_between' => 'Atribut :attribute harus antara :min dan :max digit.',
    'dimensions' => 'Atribut :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Atribut :attribute memiliki nilai yang duplikat.',
    'email' => 'Atribut :attribute harus alamat email yang valid.',
    'ends_with' => 'Atribut :attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'enum' => 'Atribut :attribute yang dipilih tidak valid.',
    'exists' => 'Atribut :attribute yang dipilih tidak valid.',
    'file' => 'Atribut :attribute harus berupa berkas.',
    'filled' => 'Atribut :attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => 'Atribut :attribute harus lebih besar dari :value.',
        'file' => 'Atribut :attribute harus lebih besar dari :value kilobita.',
        'string' => 'Atribut :attribute harus lebih besar dari :value karakter.',
        'array' => 'Atribut :attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => 'Atribut :attribute harus lebih besar dari atau sama dengan :value.',
        'file' => 'Atribut :attribute harus lebih besar dari atau sama dengan :value kilobita.',
        'string' => 'Atribut :attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => 'Atribut :attribute harus memiliki :value item atau lebih.',
    ],
    'image' => 'Atribut :attribute harus berupa gambar.',
    'in' => 'Atribut :attribute yang dipilih tidak valid.',
    'in_array' => 'Atribut :attribute tidak ada dalam :other.',
    'integer' => 'Atribut :attribute harus berupa bilangan bulat.',
    'ip' => 'Atribut :attribute harus alamat IP yang valid.',
    'ipv4' => 'Atribut :attribute harus alamat IPv4 yang valid.',
    'ipv6' => 'Atribut :attribute harus alamat IPv6 yang valid.',
    'json' => 'Atribut :attribute harus berupa string JSON yang valid.',
    'lt' => [
        'numeric' => 'Atribut :attribute harus kurang dari :value.',
        'file' => 'Atribut :attribute harus kurang dari :value kilobita.',
        'string' => 'Atribut :attribute harus kurang dari :value karakter.',
        'array' => 'Atribut :attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => 'Atribut :attribute harus kurang dari atau sama dengan :value.',
        'file' => 'Atribut :attribute harus kurang dari atau sama dengan :value kilobita.',
        'string' => 'Atribut :attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => 'Atribut :attribute tidak boleh memiliki lebih dari :value item.',
    ],
    'mac_address' => 'Atribut :attribute harus alamat MAC yang valid.',
    'max' => [
        'numeric' => 'Atribut :attribute tidak boleh lebih dari :max.',
        'file' => 'Atribut :attribute tidak boleh lebih dari :max kilobita.',
        'string' => 'Atribut :attribute tidak boleh lebih dari :max karakter.',
        'array' => 'Atribut :attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => 'Atribut :attribute harus berupa berkas dengan tipe: :values.',
    'mimetypes' => 'Atribut :attribute harus berupa berkas dengan tipe: :values.',
    'min' => [
        'numeric' => 'Atribut :attribute harus setidaknya :min.',
        'file' => 'Atribut :attribute harus setidaknya :min kilobita.',
        'string' => 'Atribut :attribute harus setidaknya :min karakter.',
        'array' => 'Atribut :attribute harus memiliki setidaknya :min item.',
    ],
    'multiple_of' => 'Atribut :attribute harus merupakan kelipatan dari :value.',
    'not_in' => 'Atribut :attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => 'Atribut :attribute harus berupa angka.',
    'password' => 'Kata sandi salah.',
    'present' => 'Atribut :attribute harus ada.',
    'prohibited' => 'Atribut :attribute tidak diperbolehkan.',
    'prohibited_if' => 'Atribut :attribute tidak diperbolehkan ketika :other adalah :value.',
    'prohibited_unless' => 'Atribut :attribute tidak diperbolehkan kecuali :other ada dalam :values.',
    'prohibits' => 'Atribut :attribute melarang kehadiran :other.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Atribut :attribute wajib diisi.',
    'required_array_keys' => 'Atribut :attribute harus berisi entri untuk: :values.',
    'required_if' => 'Atribut :attribute wajib diisi ketika :other adalah :value.',
    'required_unless' => 'Atribut :attribute wajib diisi kecuali :other ada dalam :values.',
    'required_with' => 'Atribut :attribute wajib diisi ketika :values ada.',
    'required_with_all' => 'Atribut :attribute wajib diisi ketika semua dari :values ada.',
    'required_without' => 'Atribut :attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => 'Atribut :attribute wajib diisi ketika tidak ada dari :values ada.',
    'same' => 'Atribut :attribute dan :other harus cocok.',
    'size' => [
        'numeric' => 'Atribut :attribute harus :size.',
        'file' => 'Atribut :attribute harus :size kilobita.',
        'string' => 'Atribut :attribute harus :size karakter.',
        'array' => 'Atribut :attribute harus memiliki :size item.',
    ],
    'starts_with' => 'Atribut :attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => 'Atribut :attribute harus berupa string.',
    'timezone' => 'Atribut :attribute harus zona waktu yang valid.',
    'unique' => 'Atribut :attribute sudah ada sebelumnya.',
    'uploaded' => 'Atribut :attribute gagal diunggah.',
    'url' => 'Atribut :attribute harus URL yang valid.',
    'uuid' => 'Atribut :attribute harus UUID yang valid.',

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
