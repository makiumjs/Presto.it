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
    'active_url'           => "':attribute' ne contient pas d'adresse électronique valide.",
    'after'                => "':attribute' deve essere successivo a :date.",
    'after_or_equal'       => "':attribute' deve essere successivo o uguale a :date.",
    'alpha'                => "':attribute' ne peut contenir que des lettres.",
    'alpha_dash'           => "':attribute' ne peut contenir que des lettres, des chiffres et des traits d'union.",
    'alpha_num'            => "':attribute' ne peut contenir que des lettres et des chiffres.",
    'array'                => "':attribute' doit être un tableau.",
    'before'               => "':attribute' doit être une date antérieure à :date.",
    'before_or_equal'      => "':attribute' doit être une date antérieure ou égale à :date.",
    'between'              => [
                'numeric'  => "':attribute' doit être comprise entre :min et :max.",
                'file'     => "':attribute' doit être comprise entre :min et :max kilobytes.",
                'string'   => "':attribute' doit être comprise entre :min et :max caractères.",
                'array'    => "':attribute' doit être comprise entre :min et :max éléments.",
    ],
    'boolean'              => "':attribute' doit être vrai ou faux.",
    'confirmed'            => "':attribute' ne correspond pas.",
    'date'                 => "':attribute' n'est pas une date valide.",
    'date_equals'          => "':attribute' doit être égal à :date.",
    'date_format'          => "':attribute' ne correspond pas au format :format.",
    'different'            => "':attribute' et :other doivent être différents.",
    'digits'               => "':attribute' doit être long :digits caractères.",
    'digits_between'       => "':attribute' doit être comprise entre :min et :max caractères.",
    'dimensions'           => "La taille de l'image ':attribute' n'est pas valide",
    'distinct'             => "':attribute' contient des valeurs en double",
    'email'                => "':attribute' doit être une adresse électronique valide.",
    'exists'               => "L'élément ':attribute' sélectionné n'est pas valide.",
    'file'                 => "':attribute' doit être un fichier.",
    'filled'               => "':attribute' doit avoir la valeur.",
    'gt'                   => [
                 'numeric' => "':attribute' doit être supérieure à :value.",
                 'file'    => "':attribute' doit être plus grande que :value kilobytes.",
                 'string'  => "':attribute' doit contenir plus de :value caractères.",
                 'array'   => "':attribute' doit contenir plus de :value éléments.",
    ],
    'gte'                  => [
                 'numeric' => "':attribute' doit être supérieure ou égale à :value.",
                 'file'    => "':attribute' doit être supérieure ou égale à :value kilobytes.",
                 'string'  => "':attribute' doit contenir au moins :value caractères.",
                 'array'   => "':attribute' doit contenir au moins :value éléments.",
    ],
    'image'                => "':attribute' doit être une image.",
    'in'                   => "':attribute' sélectionné n'est pas valide.",
    'in_array'             => "':attribute' n'existe pas en :other.",
    'integer'              => "':attribute' doit être un nombre entier.",
    'ip'                   => "':attribute' doit être une adresse IP valide.",
    'ipv4'                 => "':attribute' doit être une adresse IPv4 valide.",
    'ipv6'                 => "':attribute' doit être une adresse IPv6 valide.",
    'json'                 => "':attribute' doit contenir une chaîne JSON valide.",
    'lt'                   => [
                 'numeric' => "':attribute' doit être inférieur à :value.",
                 'file'    => "':attribute' doit être plus petit que :value kilobytes.",
                 'string'  => "':attribute' doit contenir moins de :value caractères",
                 'array'   => "':attribute' doit contenir moins de :value éléments.",
    ],
    'lte'                  => [
                 'numeric' => "':attribute' doit être inférieur ou égal à :value.",
                 'file'    => "':attribute' doit être inférieur ou égal à :value kilobytes.",
                 'string'  => "':attribute' ne doit pas contenir plus de :value caractères",
                 'array'   => "':attribute' ne doit pas contenir plus de :value éléments.",
    ],
    'max'                  => [
                 'numeric' => "':attribute' ne peut pas dépasser :max.",
                 'file'    => "':attribute' ne peut être supérieure à :max kilobytes.",
                 'string'  => "':attribute' ne peut pas être plus long que :max caractères",
                 'array'   => "':attribute' ne peut pas contenir plus de :max éléments.",
    ],
    'mimes'                => "':attribute' doit contenir un fichier de type: :values.",
    'mimetypes'            => "':attribute' doit contenir un fichier de type: :values.",
    'min'                  => [
                 'numeric' => "':attribute' doit être au moins :min.",
                 'file'    => "':attribute' doit être au moins :min kilobyte.",
                 'string'  => "':attribute' doit être au moins :min caractères",
                 'array'   => "':attribute' doit être au moins :min éléments.",
    ],
    'not_in'               => "':attribute' sélectionné n'est pas valide.",
    'not_regex'            => "Le format de ':attribute' n'est pas valide.",
    'numeric'              => "':attribute' doit être un numéro.",
    'present'              => "':attribute' doit être présent.",
    'regex'                => "Le format de ':attribute' n'est pas valide.",
    'required'             => "':attribute' est nécessaire.",
    'required_if'          => "':attribute' est nécessaire lorsque :other est :value.",
    'required_unless'      => "':attribute' est nécessaire sauf si :other soit dans :values.",
    'required_with'        => "':attribute' est nécessaire lorsque :values est presente.",
    'required_with_all'    => "':attribute' est nécessaire lorsque sont présent :values.",
    'required_without'     => "':attribute' est nécessaire lorsque :values n'est pas présent.",
    'required_without_all' => "':attribute' est nécessaire lorsque aucun des :values est présent.",
    'same'                 => "':attribute' et :other doivent correspondre.",
    'size'                 => [
                 'numeric' => "':attribute' doit être :size.",
                 'file'    => "':attribute' doit être :size kilobytes.",
                 'string'  => "':attribute' doit être de :size caractestres",
                 'array'   => "':attribute' doit contenir :size éléments.",
    ],
    'starts_with'          => "':attribute' doit commencer par l'une des valeurs suivantes : :values",
    'string'               => "':attribute' doit être une chaîne.",
    'timezone'             => "':attribute' doit être une zone valable.",
    'unique'               => "':attribute' est déjà utilisés.",
    'uploaded'             => "Le téléchargement de ':attribute' a échoué",
    'url'                  => "Le format de ':attribute' n'est pas valide.",
    'uuid'                 => "':attribute' doit être un UUID valide.",

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