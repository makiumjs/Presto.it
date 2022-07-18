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

    'accepted'             => "':attribute' es necesario aceptar.",
    'active_url'           => "':attribute' no tiene la dirección de correo electrónico valida.",
    'after'                => "':attribute' debe ser siguiente a :date.",
    'after_or_equal'       => "':attribute' debe ser siguiente o el mismo a :date.",
    'alpha'                => "':attribute' puede contener simplemente letras.",
    'alpha_dash'           => "':attribute' puede contener simplemente letras, numeros y guiones.",
    'alpha_num'            => "':attribute' puede contener simplemente letras y numeros .",
    'array'                => "':attribute' debe ser un array.",
    'before'               => "':attribute' debe ser una fecha antecedente a :date.",
    'before_or_equal'      => "':attribute' debe ser una fecha antecedente o igual a :date.",
    'between'              => [
                'numeric'  => "':attribute' debe ser incluido entre :min e :max.",
                'file'     => "':attribute' debe ser incluido entre :min e :max kilobytes.",
                'string'   => "':attribute' debe ser incluido entre :min and :max fuentes.",
                'array'    => "':attribute' debe ser incluido entre :min and :max elementos.",
    ],
    'boolean'              => "':attribute' debe ser real o falso.",
    'confirmed'            => "':attribute' no corresponde.",
    'date'                 => "':attribute' debe ser una fecha válida.",
    'date_equals'          => "':attribute' debe ser igual a :date.",
    'date_format'          => "':attribute' no corresponde el formato :format.",
    'different'            => "':attribute' e :other deben ser diferentes.",
    'digits'               => "':attribute' debe ser lungo :digits fuentes.",
    'digits_between'       => "':attribute' debe ser incluido tra :min e :max fuentes.",
    'dimensions'           => "Las dimensiones de las imagenes ':attribute' debe ser válidas",
    'distinct'             => "':attribute' contiene valores duplicados",
    'email'                => "':attribute' debe ser un correo electrónico válido.",
    'exists'               => "El elemento ':attribute' seleccionado no es válido.",
    'file'                 => "':attribute' debe ser un archivo.",
    'filled'               => "':attribute' debe tener valor.",
    'gt'                   => [
                 'numeric' => "':attribute' debe ser mayor que :value.",
                 'file'    => "':attribute' debe ser más grande que :value kilobytes.",
                 'string'  => "':attribute' debe contener más que :value fuentes.",
                 'array'   => "':attribute' debe contener más que :value elementos.",
    ],
    'gte'                  => [
                 'numeric' => "':attribute' debe ser mayor o igual que :value.",
                 'file'    => "':attribute' debe ser mayor o igual a :value kilobytes.",
                 'string'  => "':attribute' debe contener como mínimo :value fuentes.",
                 'array'   => "':attribute' debe contener al menos :value elementos.",
    ],
    'image'                => "':attribute' debe ser una immagen.",
    'in'                   => "':attribute' seleccionado no es válido.",
    'in_array'             => "':attribute' no existe en :other.",
    'integer'              => "':attribute' debe ser un redondo.",
    'ip'                   => "':attribute' debe ser un dirección IP válido.",
    'ipv4'                 => "':attribute' debe ser un dirección IPv4 válido.",
    'ipv6'                 => "':attribute' debe ser un dirección IPv6 válido.",
    'json'                 => "':attribute' debe contener una cadena de caracteres JSON valida.",
    'lt'                   => [
                 'numeric' => "':attribute' debe ser por debajo a :value.",
                 'file'    => "':attribute' debe ser más pequeño de :value kilobytes.",
                 'string'  => "':attribute' debe contener menos de :value fuentes.",
                 'array'   => "':attribute' debe contener menos de :value elementos.",
    ],
    'lte'                  => [
                 'numeric' => "':attribute' debe ser por debajo o igual a :value.",
                 'file'    => "':attribute' debe ser menor o igual a :value kilobytes.",
                 'string'  => "':attribute' debe contener no más de :value fuentes.",
                 'array'   => "':attribute' debe contener no más de :value elementos.",
    ],
    'max'                  => [
                 'numeric' => "':attribute' no puede ser más grande a :max.",
                 'file'    => "':attribute' no puede ser más grande de :max kilobytes.",
                 'string'  => "':attribute' no puede ser más lungo de :max fuentes.",
                 'array'   => "':attribute' no debe contener más de :max elementos.",
    ],
    'mimes'                => "':attribute' debe contener un archivo de tipo: :values.",
    'mimetypes'            => "':attribute' debe contener un archivo de tipo: :values.",
    'min'                  => [
                 'numeric' => "':attribute' debe ser como mínimo :min.",
                 'file'    => "':attribute' debe ser como mínimo :min kilobyte.",
                 'string'  => "':attribute' debe avere como mínimo :min fuentes.",
                 'array'   => "':attribute' debe avere como mínimo :min elementos.",
    ],
    'not_in'               => "':attribute' seleccionado no es válido.",
    'not_regex'            => "El formato de ':attribute' no es válido.",
    'numeric'              => "':attribute' debe ser un número.",
    'present'              => "':attribute' debe ser presente.",
    'regex'                => "El formato de ':attribute' no es válido.",
    'required'             => "':attribute' es requerido.",
    'required_if'          => "':attribute' es requerido cuándo :other es :value.",
    'required_unless'      => "':attribute' es requerido a no ser que :other se en :values.",
    'required_with'        => "':attribute' es requerido cuándo :values es presente.",
    'required_with_all'    => "':attribute' es requerido cuándo están presentes :values.",
    'required_without'     => "':attribute' es requerido cuándo :values no es presente.",
    'required_without_all' => "':attribute' es requerido cuándo ninguno de :values es presente.",
    'same'                 => "':attribute' e :other deber corresponder.",
    'size'                 => [
                 'numeric' => "':attribute' debe ser :size.",
                 'file'    => "':attribute' debe ser :size kilobytes.",
                 'string'  => "':attribute' debe ser de :size fuentes.",
                 'array'   => "':attribute' debe contener :size elementos.",
    ],
    'starts_with'          => "':attribute' debe empezar con uno de los siguientes valores: :values",
    'string'               => "':attribute' debe ser una cadena de caracteres.",
    'timezone'             => "':attribute' debe ser una zona válida.",
    'unique'               => "':attribute' es ya en uso.",
    'uploaded'             => "El subir de ':attribute' es fracasado",
    'url'                  => "El formato de ':attribute' no es válido.",
    'uuid'                 => "':attribute' debe ser un UUID válido.",

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