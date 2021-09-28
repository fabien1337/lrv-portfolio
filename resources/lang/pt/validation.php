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

    'accepted' => ':attribute deve ser aceito.',
    'accepted_if' => ':attribute deve ser aceito quando :other é :value.',
    'active_url' => ':attribute não é uma URL válida.',
    'after' => ':attribute deve ser uma data após :date.',
    'after_or_equal' => ':attribute deve ser uma data após ou igual a :date.',
    'alpha' => ':attribute deve conter apenas letras.',
    'alpha_dash' => ':attribute deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => ':attribute deve conter apenas letras e números.',
    'array' => ':attribute deve ser uma matriz.',
    'before' => ':attribute deve ser uma data antes de :date.',
    'before_or_equal' => ':attribute deve ser uma data antes ou igual a :date.',
    'between' => [
        'numeric' => ':attribute deve ser entre :min e :max.',
        'file' => ':attribute deve ser entre :min e :max kilobytes.',
        'string' => ':attribute deve ser entre :min e :max caracteres.',
        'array' => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou false.',
    'confirmed' => 'A confirmação do campo :attribute não corresponde.',
    'current_password' => 'A senha está incorreta.',
    'date' => ':attribute não é uma data válida.',
    'date_equals' => ':attribute deve ser uma data igual a :date.',
    'date_format' => 'O formato d:attribute não corresponde a :format.',
    'different' => ':attribute e :other deve ser diferentes.',
    'digits' => ':attribute deve ser de :digits digits.',
    'digits_between' => ':attribute deve ser entre :min e :max digits.',
    'dimensions' => ':attribute tem dimensões de imagem inválidas.',
    'distinct' => ':attribute tem um valor duplicado.',
    'email' => ':attribute deve ser um endereço de e-mail válido.',
    'ends_with' => ':attribute deve terminar com um dos seguintes: :values.',
    'exists' => 'seleccionado :attribute é inválido.',
    'file' => ':attribute deve ser um ficheiro.',
    'filled' => 'O campo :attribute deve ser um valor.',
    'gt' => [
        'numeric' => ':attribute deve ser superior a :value.',
        'file' => ':attribute deve ser superior a :value kilobytes.',
        'string' => ':attribute deve ser superior a :value caracteres.',
        'array' => ':attribute deve ter mais do que :value itens.',
    ],
    'gte' => [
        'numeric' => ':attribute deve ser superior ou igual a :value.',
        'file' => ':attribute deve ser superior ou igual a :value kilobytes.',
        'string' => ':attribute deve ser superior ou igual a :value characters.',
        'array' => ':attribute deve ter :value itens ou mais.',
    ],
    'image' => ':attribute deve ser uma imagem.',
    'in' => ':attribute seleccionado.a é inválido.a.',
    'in_array' => ':attribute não existe em :other.',
    'integer' => ':attribute deve ser um número inteiro.',
    'ip' => ':attribute deve ser um endereço IP válido.',
    'ipv4' => ':attribute deve ser um endereço IPv4 válido.',
    'ipv6' => ':attribute deve ser um endereço IPv6 válido.',
    'json' => ':attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => ':attribute deve ser inferior a :value.',
        'file' => ':attribute deve ser inferior a :value kilobytes.',
        'string' => ':attribute deve ser inferior a :value caracteres.',
        'array' => ':attribute deve ter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => ':attribute deve ser inferior ou igual a :value.',
        'file' => ':attribute deve ser inferior ou igual a :value kilobytes.',
        'string' => ':attribute deve ser inferior ou igual a :value caracteres.',
        'array' => ':attribute não deve ter mais de :value itens.',
    ],
    'max' => [
        'numeric' => ':attribute não deve ser superior a :max.',
        'file' => ':attribute não deve ser superior a :max kilobytes.',
        'string' => ':attribute não deve ser superior a :max caracteres.',
        'array' => ':attribute não deve ter mais de :max itens.',
    ],
    'mimes' => ':attribute deve ser um ficheiro de tipo: :values.',
    'mimetypes' => ':attribute deve ser um ficheiro de tipo: :values.',
    'min' => [
        'numeric' => ':attribute deve estar pelo menos :min.',
        'file' => ':attribute deve estar pelo menos :min kilobytes.',
        'string' => ':attribute deve estar pelo menos :min caracteres.',
        'array' => ':attribute deve ter no mínimo :min itens.',
    ],
    'multiple_of' => ':attribute deve ser um múltiplo de :value.',
    'not_in' => ':attribute seleccionado.a é inválido.a.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => ':attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => ':attribute deve estar presente.',
    'regex' => 'O formato do campo :attribute é inválido.',
    'required' => 'O campo :attribute é necessário.',
    'required_if' => 'O campo :attribute é necessário quando o campo :other é :value.',
    'required_unless' => 'O campo :attribute é necessário a menos que o campo :other está em :values.',
    'required_with' => 'O campo :attribute é necessário quando :values está presente.',
    'required_with_all' => 'O campo :attribute é necessário quando :values estão presentes.',
    'required_without' => 'O campo :attribute é necessário quando :values não está presente.',
    'required_without_all' => 'O campo :attribute field é necessário quando nenhum dos :values estão presentes.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quand :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other está em :values.',
    'prohibits' => 'O campo :attribute é proibido :other estar presente.',
    'same' => ':attribute e :other devem corresponder.',
    'size' => [
        'numeric' => ':attribute deve ser :size.',
        'file' => ':attribute deve ser de :size kilobytes.',
        'string' => ':attribute deve ser de :size caracteres.',
        'array' => ':attribute deve conter :size itens.',
    ],
    'starts_with' => ':attribute deve começar com um dos seguintes: :values.',
    'string' => ':attribute deve ser uma string.',
    'timezone' => ':attribute deve ser um fuso horário válido.',
    'unique' => ':attribute já foi tomado.',
    'uploaded' => ':attribute não foi possível carregar.',
    'url' => ':attribute deve ser um URL válido.',
    'uuid' => ':attribute deve ser um UUID válido.',

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

    'attributes' => [
        'name' => "Nome",
        'email' => "Email",
        'subject' => "Assunto",
        'message' => "Mensagem",
    ],

];
