@extends('layouts.admin')

@section('title', 'Trash')

@section('content')
<div class="content">
    <h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-rounded btn-primary d-md-none float-right ml-5" data-toggle="class-toggle" data-target=".js-inbox-nav" data-class="d-none d-md-block">Menu</button>
        Trash (<span class="trashed-mails">{{$nb_trashed_mails}}</span>)
    </h2>
    <div class="row">
        <div class="col-md-5 col-xl-3">
            <div class="js-inbox-nav d-none d-md-block">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Navigation</h3>
                    </div>
                    <div class="block-content">
                        <ul class="nav nav-pills flex-column push">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between" href="{{route('admin.contacts.index')}}">
                                    <span><i class="fa fa-fw fa-inbox mr-5"></i> Inbox</span>
                                    <span class="badge badge-pill badge-secondary total-mails">{{$nb_mails}}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between active" href="{{route('admin.contacts.trash')}}">
                                    <span><i class="fa fa-fw fa-trash mr-5"></i> Trash</span>
                                    <span id="nb_trashed_mails" class="badge badge-pill badge-secondary trashed-mails">{{$nb_trashed_mails}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-xl-9">
            <!-- Message List -->
            <div class="block">
                <div class="block-header block-header-default">
                    <div class="block-title">
                        <strong id="nb-mails">1-10</strong> from <strong class="trashed-mails">{{$nb_trashed_mails}}</strong>
                    </div>
                    <div class="block-options">
                        <button id="prev-btn" type="button" class="btn-block-option" data-page="1" data-toggle="block-option">
                            <i class="si si-arrow-left"></i>
                        </button>
                        <button id="next-btn" type="button" class="btn-block-option" data-page="2" data-toggle="block-option">
                            <i class="si si-arrow-right"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="push">
                        <button type="button" id="restore-btn" class="btn btn-rounded btn-alt-secondary">
                            <i class="fa fa-undo text-danger mx-5"></i>
                            <span class="d-none d-sm-inline"> Restore</span>
                        </button>
                        <button type="button" id="delete-btn" class="btn btn-rounded btn-alt-secondary" data-toggle="modal" data-target="#modal-delete">
                            <i class="fa fa-times text-danger mx-5"></i>
                            <span class="d-none d-sm-inline"> Delete</span>
                        </button>
                    </div>
                    
                    <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.tableToolsCheckable()) -->
                    <table id="contacts" class="js-table-checkable table table-hover table-vcenter">
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Message Modal -->
<div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="modal-message" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Subject</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full bg-image text-center" style="background-image: url('{{asset('assets/media/photos/photo6.jpg')}}');">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('assets/media/avatars/avatar4.jpg')}}" alt="">
                </div>
                <div class="block-content block-content-full block-content-sm bg-body font-size-sm">
                    <span class="text-muted float-right"><em>2 min ago</em></span>
                    <a id="email-link" href="javascript:void(0)">service@example.com</a>
                </div>
                <div class="block-content">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Message Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.contacts.force_delete')}}" method="post">
                @csrf
                @method('DELETE')
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Delete</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Are you sure to delete these mails ?</p>
                        <input type="hidden" id="input-delete-ids" name="ids">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submot" class="btn btn-alt-danger">
                        <i class="fa fa-check"></i> Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Delete Modal -->
@endsection

@section('javascript')
<script>
    
    var headers = {
        headers : { 
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    };
    var $tbody = $('table#contacts > tbody');
    var $prev = $('#prev-btn');
    var $next = $('#next-btn');
    var $nbMails = $('#nb-mails');
    
    function renderContacts(contacts) {
        var render = '';
        if (contacts.length > 0) {
            $nbMails.html('1-' + contacts.length);
            for (var i in contacts) {
                var contact = contacts[i];
                var urlShow = '{{ route("api.contact.find", ["id" => ":id"]) }}';
                urlShow = urlShow.replace(':id', contact.id);
                var seenClass = contact.is_seen ? 'class="seen"' : '';
                render += `<tr id="contact_tr_${contact.id}" ${seenClass}>
                    <td class="text-center">
                        <label class="css-control css-control-primary css-checkbox">
                            <input value="${contact.id}" type="checkbox" class="css-control-input">
                            <span class="css-control-indicator"></span>
                        </label>
                    </td>
                    <td class="d-none d-sm-table-cell font-w600">${contact.name}</td>
                    <td>
                        <a class="show-message font-w600" data-toggle="modal" data-target="#modal-message" data-url="${urlShow}" href="#">${contact.subject}</a>
                        <div class="text-muted mt-5">${contact.wrap_message}</div>
                    </td>
                    <td class="d-none d-xl-table-cell font-w600 font-size-sm text-muted">${contact.created_at}</td>
                </tr>`
            }
        }
        return render;
    }
    
    function getContactPerPage(page) {
        var url = "{{route('api.contact.trash')}}?page="+page;
        fetch(url, headers)
        .then(contacts => contacts.json())
        .then(contacts => $tbody.html(renderContacts(contacts)));
    }
    getContactPerPage(1);
    
    // Click next page
    $next.on('click', () => {
        var prevPage = $prev.data('page');
        var nextPage = $next.data('page');
        var newPage = nextPage+1;
        $prev.data('page', nextPage);
        $next.data('page', newPage);
        getContactPerPage(nextPage);
    });
    
    // Click previous page
    $prev.on('click', () => {
        var prevPage = $prev.data('page');
        if (prevPage > 1) {
            var nextPage = $next.data('page');
            var oldPage = prevPage-1;
            $prev.data('page', oldPage);
            $next.data('page', prevPage);
            getContactPerPage(oldPage);
        }
    });
    
    // Click link to show message on modal
    $(document).on('click', '.show-message', (e) => {
        e.preventDefault();
        var url = $(e.target).data('url');
        fetch(url, headers)
        .then(contact => contact.json())
        .then(contact => {
            $('#modal-message .block-title').html(contact.subject);
            $('#modal-message span > em').html(contact.created_at);
            $('#modal-message #email-link').html(contact.email);
            $('#modal-message .block-content > p').html(contact.message);
            $('#modal-message').modal('show');
            $('#contact_tr_'+contact.id).addClass('seen');
        });
    });
    
    // Get ids in array to force delete or restore
    var ids = [];
    $(document).on('click', '.css-control-input', (e) => {
        var $checkbox = $(e.target);
        var value = $checkbox.val();
        if (!$checkbox.is(':checked')) {
            ids = ids.filter(item => item !== value)
        }
        else {
            ids.push(value);
        }
        $('#input-delete-ids').val(ids);
    });
    
    // Click restore button
    $('#restore-btn').on('click', () => {
        console.log('ids', ids, ids.length);
        if (ids.length > 0) {
            fetch("{{route('api.contact.restore')}}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ ids })
            })
            .then(response => response.json())
            .then(response => {
                var contacts = response.contacts;
                var nb_mails = response.nb_mails;
                var nb_trashed_mails = response.nb_trashed_mails;
                
                $tbody.empty();
                $tbody.html(renderContacts(contacts));
                $('.total-mails').html(nb_mails);
                $('.trashed-mails').html(nb_trashed_mails);
                ids = [];
            });
        }
    });
</script>
@endsection

@section('stylesheet')
<style>
    .table-hover tbody tr.seen {
        color: #575757;
        background-color: rgba(0,0,0,.04);
    }
</style>
@endsection