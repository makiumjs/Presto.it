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

    'accepted'             => "':attribute' doit être accepté.",
    'active_url'           => "':attribute' haina barua pepe halali.",
    'after'                => "':attribute' kuwa na mafanikio :date.",
    'after_or_equal'       => "':attribute' deve essere successivo o uguale a :date.",
    'alpha'                => "':attribute' inaweza kuwa na herufi pekee.",
    'alpha_dash'           => "':attribute' inaweza kuwa na herufi, nambari na vistari pekee.",
    'alpha_num'            => "':attribute' inaweza kuwa na herufi na nambari pekee.",
    'array'                => "':attribute' lazima iwe safu.",
    'before'               => "':attribute' lazima iwe tarehe kabla :date.",
    'before_or_equal'      => "':attribute' lazima iwe tarehe kabla au sawa na :date.",
    'between'              => [
                'numeric'  => "':attribute' lazima iwe kati :min na :max.",
                'file'     => "':attribute' lazima iwe kati :min na :max kilobytes.",
                'string'   => "':attribute' lazima iwe kati :min na :max wahusika.",
                'array'    => "':attribute' lazima iwe kati :min na :max vipengele.",
    ],
    'boolean'              => "':attribute' lazima iwe kweli au uongo.",
    'confirmed'            => "':attribute' hailingani.",
    'date'                 => "':attribute' sio tarehe halali.",
    'date_equals'          => "':attribute' lazima iwe sawa na :date.",
    'date_format'          => "':attribute' hailingani na umbizo :format.",
    'different'            => "':attribute' na :other lazima iwe tofauti.",
    'digits'               => "':attribute' lazima iwe ndefu :digits wahusika.",
    'digits_between'       => "':attribute' lazima iwe kati :min na :max wahusika.",
    'dimensions'           => "Ukubwa wa picha':attribute' si halali",
    'distinct'             => "':attribute' ina maadili yanayorudiwa",
    'email'                => "':attribute' lazima iwe barua pepe halali.",
    'exists'               => "Kipengee kilichochaguliwa ':attribute' si halali.",
    'file'                 => "':attribute' lazima iwe faili.",
    'filled'               => "':attribute' lazima iwe na thamani.",
    'gt'                   => [
                 'numeric' => "':attribute' lazima iwe kubwa kuliko :value.",
                 'file'    => "':attribute' lazima iwe kubwa kuliko :value kilobytes.",
                 'string'  => "':attribute' lazima iwe na zaidi ya :value wahusika.",
                 'array'   => "':attribute' lazima iwe na zaidi ya :value vipengele.",
    ],
    'gte'                  => [
                 'numeric' => "':attribute' lazima iwe kubwa kuliko au sawa na :value.",
                 'file'    => "':attribute' lazima iwe kubwa kuliko au sawa na :value kilobytes.",
                 'string'  => "':attribute' lazima iwe na angalau :value wahusika.",
                 'array'   => "':attribute' lazima iwe na angalau :value vipengele.",
    ],
    'image'                => "':attribute' lazima iwe picha.",
    'in'                   => "':attribute' iliyochaguliwa ni batili.",
    'in_array'             => "':attribute' haipo ndani:other.",
    'integer'              => "':attribute' lazima iwe nambari kamili.",
    'ip'                   => "':attribute' lazima iwe anwani halali ya IP.",
    'ipv4'                 => "':attribute' lazima iwe anwani halali ya IPv4.",
    'ipv6'                 => "':attribute' lazima iwe anwani halali ya IPv6.",
    'json'                 => "':attribute' lazima iwe na mfuatano halali wa JSON.",
    'lt'                   => [
                 'numeric' => "':attribute' lazima iwe chini ya :value.",
                 'file'    => "':attribute' lazima iwe ndogo kuliko :value kilobytes.",
                 'string'  => "':attribute' lazima iwe na chini ya:value caractères",
                 'array'   => "':attribute' lazima iwe na chini ya:value vipengele.",
    ],
    'lte'                  => [
                 'numeric' => "':attribute' lazima iwe chini ya au sawa na :value.",
                 'file'    => "':attribute' lazima iwe chini ya au sawa na :value kilobytes.",
                 'string'  => "':attribute' lazima isiwe na zaidi ya :value caractères",
                 'array'   => "':attribute' lazima isiwe na zaidi ya :value vipengele.",
    ],
    'max'                  => [
                 'numeric' => "':attribute' haiwezi kuzidi :max.",
                 'file'    => "':attribute' haiwezi kuwa kubwa kuliko :max kilobytes.",
                 'string'  => "':attribute' haiwezi kuwa ndefu kuliko :max caractères",
                 'array'   => "':attribute' haiwezi kuwa na zaidi ya:max vipengele.",
    ],
    'mimes'                => "':attribute' lazima iwe na faili ya aina: :values.",
    'mimetypes'            => "':attribute' lazima iwe na faili ya aina: :values.",
    'min'                  => [
                 'numeric' => "':attribute' lazima iwe angalau :min.",
                 'file'    => "':attribute' lazima iwe angalau :min kilobyte.",
                 'string'  => "':attribute' lazima iwe angalau :min caractères",
                 'array'   => "':attribute' lazima iwe angalau :min vipengele.",
    ],
    'not_in'               => "':attribute' iliyochaguliwa si halali.",
    'not_regex'            => "Ukubwa wa ':attribute' si halali.",
    'numeric'              => "':attribute' lazima iwe nambari.",
    'present'              => "':attribute' lazima kuwepo.",
    'regex'                => "Ukubwa wa ':attribute' si halali.",
    'required'             => "':attribute' ni lazima.",
    'required_if'          => "':attribute' inahitajika wakati :other na :value.",
    'required_unless'      => "':attribute' ni muhimu isipokuwa si :other ama katika :values.",
    'required_with'        => "':attribute' inahitajika wakati :values yupo.",
    'required_with_all'    => "':attribute' inahitajika wakati zipo :values.",
    'required_without'     => "':attribute' inahitajika wakati :values haipo.",
    'required_without_all' => "':attribute' inahitajika wakati hakuna wa :values yupo.",
    'same'                 => "':attribute' na :other lazima ilingane.",
    'size'                 => [
                 'numeric' => "':attribute' lazima iwe :size.",
                 'file'    => "':attribute' lazima iwe :size kilobytes.",
                 'string'  => "':attribute' lazima kutoka:size caractestres",
                 'array'   => "':attribute' lazima iwe na :size vipengele.",
    ],
    'starts_with'          => "':attribute' lazima ianze na mojawapo ya maadili yafuatayo : :values",
    'string'               => "':attribute' lazima iwe mnyororo.",
    'timezone'             => "':attribute' lazima iwe eneo halali.",
    'unique'               => "':attribute' tayari inatumika.",
    'uploaded'             => "Upakuaji wa ':attribute'imeshindwa",
    'url'                  => "Ukubwa wa ':attribute' si halali.",
    'uuid'                 => "':attribute' lazima iwe UUID halali.",

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

    'custom'                => [
        'attribute-name'    => [
            'rule-name'     => "custom-message",
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