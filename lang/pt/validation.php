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

    'accepted'             => "':attribute' deve ser aceite.",
    'active_url'           => "':attribute' não contém um endereço de correio electrónico válido.",
    'after'                => "':attribute' deve ser posterior a  :date.",
    'after_or_equal'       => "':attribute' deve ser posterior ou igual a :date.",
    'alpha'                => "':attribute' só pode conter letras.",
    'alpha_dash'           => "':attribute' só pode conter letras, números e hífenes.",
    'alpha_num'            => "':attribute' só pode conter letras e números.",
    'array'                => "':attribute' deve ser uma matriz.",
    'before'               => "':attribute' deve ser uma data antes de  :date.",
    'before_or_equal'      => "':attribute' deve ser uma data anterior ou igual a  :date.",
    'between'              => [
                'numeric'  => "':attribute' deve estar entre :min e :max.",
                'file'     => "':attribute' deve estar entre :min e :max kilobytes.",
                'string'   => "':attribute' deve estar entre :min e :max caracteres.",
                'array'    => "':attribute' deve estar entre :min e :max elementos.",
    ],
    'boolean'              => "':attribute' deve essere vero o falso.",
    'confirmed'            => "':attribute' não corresponde.",
    'date'                 => "':attribute' não é uma data válida.",
    'date_equals'          => "':attribute' deve ser igual a :date.",
    'date_format'          => "':attribute' não corresponde ao formato :format.",
    'different'            => "':attribute' e :other deve ser diferente.",
    'digits'               => "':attribute' devem ser longos :digits caracteres.",
    'digits_between'       => "':attribute' deve estar entre :min e :max deve estar entre.",
    'dimensions'           => "O tamanho da imagem ':attribute' é inválido",
    'distinct'             => "':attribute' contém valores em duplicado",
    'email'                => "':attribute' deve ser um endereço de correio electrónico válido",
    'exists'               => " O elemento seleccionado ':attribute' é inválido.",
    'file'                 => "':attribute' deve ser um ficheiro.",
    'filled'               => "':attribute' deve ser dado um valor.",
    'gt'                   => [
                 'numeric' => "':attribute' deve ser maior do que  :value.",
                 'file'    => "':attribute' deve ser maior do que  :value kilobytes.",
                 'string'  => "':attribute' deve conter mais do que caracteres. :value caracteres.",
                 'array'   => "':attribute' deve conter mais do que :value elementos.",
    ],
    'gte'                  => [
                 'numeric' => "':attribute' deve ser maior ou igual a:value.",
                 'file'    => "':attribute' deve ser maior ou igual a:value kilobytes.",
                 'string'  => "':attribute' deve conter pelo menos :value caracteres.",
                 'array'   => "':attribute' deve conter pelo menos :value elementos.",
    ],
    'image'                => "':attribute' deve ser uma imagem.",
    'in'                   => "':attribute' seleccionado é inválido.",
    'in_array'             => "':attribute' não existe em:other.",
    'integer'              => "':attribute' deve ser um número inteiro..",
    'ip'                   => "':attribute' deve ser um endereço IP válido.",
    'ipv4'                 => "':attribute' deve ser um endereço IPv4 válido.",
    'ipv6'                 => "':attribute' deve ser um endereço IPv6 válido.",
    'json'                 => "':attribute' deve conter um fio válido do JSON.",
    'lt'                   => [
                 'numeric' => "':attribute' deve ser menor do que :value.",
                 'file'    => "':attribute' deve ser menor do que :value kilobytes.",
                 'string'  => "':attribute' deve conter menos do que :value caracteres.",
                 'array'   => "':attribute' deve conter menos do que :value elementos.",
    ],
    'lte'                  => [
                 'numeric' => "':attribute' deve ser inferior ou igual a :value.",
                 'file'    => "':attribute' deve ser inferior ou igual a :value kilobytes.",
                 'string'  => "':attribute' não deve conter mais do que :value caracteres.",
                 'array'   => "':attribute' não deve conter mais do que :value elementos.",
    ],
    'max'                  => [
                 'numeric' => "':attribute' não pode ser maior do que :max.",
                 'file'    => "':attribute' não pode ser maior do que :max kilobytes.",
                 'string'  => "':attribute' não pode ser maior do que :max caracteres.",
                 'array'   => "':attribute' não pode conter mais do que :max elementos.",
    ],
    'mimes'                => "':attribute' deve conter um ficheiro do tipo: :values.",
    'mimetypes'            => "':attribute' deve conter um ficheiro do tipo: :values.",
    'min'                  => [
                 'numeric' => "':attribute' deve ser pelo menos :min.",
                 'file'    => "':attribute' deve ser pelo menos :min kilobyte.",
                 'string'  => "':attribute' deve ter pelo menos :min caracteres.",
                 'array'   => "':attribute' deve ter pelo menos :min elementos.",
    ],
    'not_in'               => "':attribute' seleccionado é inválido.",
    'not_regex'            => "O formato de ':attribute' é inválido.",
    'numeric'              => "':attribute' deve ser um número.",
    'present'              => "':attribute' deve estar presente.",
    'regex'                => "O formato de ':attribute' é inválido.",
    'required'             => "':attribute' é necessário.",
    'required_if'          => "':attribute' é necessário quando :other é :value.",
    'required_unless'      => "':attribute' é necessário, a menos que :other esteja em :values.",
    'required_with'        => "':attribute' é necessário quando :values estão presentes.",
    'required_with_all'    => "':attribute' é necessário quando estão presentes. :values.",
    'required_without'     => "':attribute' é necessário quando :values non è presente.",
    'required_without_all' => "':attribute' é necessário quando nenhum dos :value está presente.",
    'same'                 => "':attribute' e :other devem corresponder.",
    'size'                 => [
                 'numeric' => "':attribute' deve ser :size.",
                 'file'    => "':attribute' deve ser :size kilobytes.",
                 'string'  => "':attribute' deve ser de :size caracteres.",
                 'array'   => "':attribute' deve conter :size elementos.",
    ],
    'starts_with'          => "':attribute' deve começar com um dos seguintes valores: :values",
    'string'               => "':attribute' deve ser um string.",
    'timezone'             => "':attribute' deve ser uma zona válida.",
    'unique'               => "':attribute' já está a ser utilizado.",
    'uploaded'             => "O carregamento de ':attribute' falhou",
    'url'                  => "O formato de ':attribute' é inválido.",
    'uuid'                 => "':attribute' deve ser um UUID válido.",

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