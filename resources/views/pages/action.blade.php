<?php
    $auth_user= authSession();
?>
    @if($action_type == 'status')
    <div class="custom-switch custom-switch-text custom-switch-color custom-control-inline">
        <div class="custom-switch-inner">
            <input type="checkbox" class="custom-control-input bg-success change_status" data-type="pages" id="{{ $data->id }}" data-id="{{ $data->id }}" {{ ($data->status == '0' ? 0 : 1) ? 'checked' : '' }} value="{{ $data->id }}">
            <label class="custom-control-label" for="{{ $data->id }}" data-on-label="" data-off-label=""></label>
        </div>
    </div>
    @endif

    @if($action_type == 'action')
    <div class="d-flex justify-content-end align-items-center">
        @if($auth_user->can('pages-edit'))
            <a class="mr-2" href="{{ route('pages.edit', $id) }}" title="{{ __('message.update_form_title',['form' => __('message.pages') ]) }}"><i class="fas fa-edit text-primary"></i></a>
        @endif

        @if($auth_user->can('pages-show'))
        <a class="mr-2" href="{{ route('pages.show',$id) }}"><i class="fas fa-eye text-secondary"></i></a>
        @endif

        @if($auth_user->can('pages-delete'))
            {!! html()->form('DELETE', route('pages.destroy', $id))->attribute('data--submit', 'pages' . $id)->open() !!}
                <a class="mr-2 text-danger" href="javascript:void(0)" data--submit="pages{{$id}}"
                    data--confirmation='true' data-title="{{ __('message.delete_form_title',['form'=> __('message.pages') ]) }}"
                    title="{{ __('message.delete_form_title',['form'=>  __('message.pages') ]) }}"
                    data-message='{{ __("message.delete_msg") }}'>
                    <i class="fas fa-trash-alt"></i>
                </a>
            {!! html()->form()->close() !!}
        @endif
    </div>
    @endif
