<div class="panel-heading">
    admin {{ Lang::get($_current_component . '::'.$_current_controller.'.create')  }} <span class="custom-meta-btn btn btn-default btn-xs pull-right"><i class="fa fa-wrench"></i></span>
</div>
@include('CustomMeta::show')
<div class="panel-body">
    @if( Config::get('Member::member.'.$_current_controller) )
        {{ Form::open(array('id' => 'current-main-form', 'class' => 'form-inline', 'url' => URL::route($_current_controller.'.store', $_current_relations), 'autocomplete' => 'off' )) }}
        @foreach( Config::get('Member::member.'.$_current_controller) as $field => $config )
            @if( isset( $config['form']['show'] ) && $config['form']['show'] )
                @if( $config['form']['type'] != 'hidden' )
                    @if(isset($config['form']['option_model']) && isset($_current_relations[ strtolower($config['form']['option_model']['model']) ]))
                    @else
                        {{ Form::label($field, Lang::get($_current_component . '::'.$_current_controller.'.'.$field)) }}
                    @endif
                @endif

                @if( in_array( $config['form']['type'], array('select', 'treeSelect', 'regionSelect', 'ruleSelect') ) )
                    @if(isset($config['form']['option_model']) && isset($_current_relations[ strtolower($config['form']['option_model']['model']) ]))
                        {{ Form::hidden($field, $_current_relations[ strtolower($config['form']['option_model']['model']) ]) }}
                    @else
                        {{ Form::$config['form']['type']($field, isset($config['form']['options']) ? $config['form']['options'] : array(), Input::get($field) ?: (isset($config['form']['value']) ? $config['form']['value'] : '') , array( 'placeholder' => Lang::get($_current_component . '::'.$_current_controller.'.'.$field) ) + (isset($config['form']['attr']) ? $config['form']['attr'] : array()), isset($config['form']['option_model']) ? $config['form']['option_model'] : array()  ) }}
                    @endif
                @else
                    {{ Form::$config['form']['type']($field, Input::get($field) ?: (isset($config['form']['value']) ? $config['form']['value'] : ''), array( 'placeholder' => Lang::get($_current_component . '::'.$_current_controller.'.'.$field) ) + (isset($config['form']['attr']) ? $config['form']['attr'] : array()), array('component_id'=>array_search($_current_component, Config::get('Member::member.components') ), 'user_id'=>Auth::id()) ) }}
                @endif

                @if ($error = $errors->first($field))
                    <div class='error'>
                        {{ $error }}
                    </div>
                @endif
            @endif
        @endforeach
        {{ Form::submit(Lang::get($_current_component . '::'.$_current_controller.'.create'), array('class' => 'btn btn-primary pull-right')) }}
        {{ Form::close() }}
    @else
        <div class="alert alert-warning">NO CONFIG </div>
    @endif

</div>

