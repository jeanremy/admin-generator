var base = require('../components/Form/Form');

Vue.component('{{ $modelJSName }}-form', {
    mixins: [base],
    data: function() {
        return {
            form: {
                @foreach($columns as $column){{ $column['name'].':' }} @if($column['type'] == 'json') {{ '{}' }} @elseif($column['type'] == 'boolean') {!! "false" !!} @else {!! "''" !!} @endif,
                @endforeach

            }
        }
    }

});