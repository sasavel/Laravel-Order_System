<section class="ve_freelancer_yellow_section">

    <div class="pagetitle">
        <h1 style="margin-left: 0 !important">Bestellungen in Arbeit</h1>
        <p></p>
    </div>
    <div>
        <div style="margin-top: 40px;">

            <div class="responsive-table">
                <table id="ve_freelancer_yellow_table" class="table table-striped" style="width:100%; font-size:13px;">
                    <thead>
                        <tr>
                            <th style="max-width: 110px !important">{{ __('home.order_type') }}</th>
                            <th>{{ __('home.delivery_time') }}</th>
                            <th>{{ __('home.order') }}</th>
                            <th>{{ __('home.date') }}</th>
                            <th>{{ __('home.order_from') }}</th>
                            <th style="min-width: 250px !important">{{ __('home.project') }}</th>
                            <th>{{ __('home.status') }}</th>
                            <th style="max-width: 110px !important">{{ __('home.detail') }}</th>
                            <th style="max-width: 110px !important">{{ __('home.change') }}</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

        </div>

    </div>

</section>

{{-- @include('components.freelancer.order-detail')
@include('components.freelancer.order-change') --}}

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table;

    $(function() {
        table = $('#ve_freelancer_yellow_table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            searching: false,
            language: {
                paginate: {
                    next: '<i class="fa-solid fa-chevron-right"></i>', // or '→'
                    previous: '<i class="fa-solid fa-chevron-left"></i>' // or '←'
                }
            },
            ajax: {
                url: "{{ __('routes.vector-freelancer-yellow') }}",
                type: "get",
            },
            order: [
                [2, 'desc']
            ],

            columns: [{
                    data: 'type',
                    name: 'type',
                    orderable: false,
                    searchable: false
                },
                {

                    data: 'deliver_time',
                    name: 'deliver_time'
                },
                {
                    data: 'order',
                    name: 'order'
                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'ordered_from',
                    name: 'ordered_from'
                },
                {
                    data: 'project_name',
                    name: 'project_name'
                },
                {
                    data: 'status',
                    name: 'status'
                },

                {
                    data: 'detail',
                    name: 'detail',
                    orderable: false,
                    searchable: false
                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>
