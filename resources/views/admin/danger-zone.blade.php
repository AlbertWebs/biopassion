@extends('admin.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}/admin/home">Dashboard </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Danger Zone</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Warning Alert -->
                <div class="alert alert-danger" role="alert" style="border-left: 5px solid #dc3545; background-color: #f8d7da; border-color: #f5c6cb;">
                    <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> ⚠️ DANGER ZONE ⚠️</h4>
                    <p><strong>WARNING:</strong> This section allows you to permanently delete data from your database. This action cannot be undone!</p>
                    <hr>
                    <p class="mb-0">Please select only the tables you want to purge. All selected data will be permanently deleted.</p>
                </div>

                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ Session::get('success') }}
                        @if(Session::has('purged_tables'))
                            <ul class="mt-2 mb-0">
                                @foreach(Session::get('purged_tables') as $purged)
                                    <li>{{ $purged['table'] }}: {{ $purged['count'] }} records deleted</li>
                                @endforeach
                            </ul>
                        @endif
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ Session::get('error') }}
                        @if(Session::has('errors'))
                            <ul class="mt-2 mb-0">
                                @foreach(Session::get('errors') as $error)
                                    <li>{{ $error['table'] }}: {{ $error['error'] }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Danger Zone Form -->
                <div class="card" style="border: 2px solid #dc3545;">
                    <div class="card-header" style="background-color: #dc3545; color: white;">
                        <h4 class="card-title mb-0"><i class="fas fa-skull-crossbones"></i> Data Purge Center</h4>
                    </div>
                    <div class="card-body">
                        <form id="purgeForm" method="POST" action="{{ route('admin.purge-data') }}">
                            @csrf
                            
                            <div class="mb-4">
                                <h5>Select Tables to Purge:</h5>
                                <p class="text-muted">Check the boxes next to the tables you want to permanently delete all data from.</p>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th width="50">
                                                <input type="checkbox" id="selectAll" onchange="toggleAll(this)">
                                            </th>
                                            <th>Table Name</th>
                                            <th>Records</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tables as $tableKey => $tableInfo)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" 
                                                           name="tables[]" 
                                                           value="{{ $tableKey }}" 
                                                           class="table-checkbox"
                                                           onchange="updateSelectedCount()">
                                                </td>
                                                <td><strong>{{ $tableInfo['name'] }}</strong></td>
                                                <td>
                                                    <span class="badge bg-{{ $tableInfo['count'] > 0 ? 'danger' : 'secondary' }}">
                                                        {{ number_format($tableInfo['count']) }} records
                                                    </span>
                                                </td>
                                                <td class="text-muted">{{ $tableInfo['description'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="alert alert-warning mt-4" id="selectionWarning" style="display: none;">
                                <i class="fas fa-exclamation-circle"></i> 
                                <strong>Warning:</strong> You have selected <span id="selectedCount">0</span> table(s) for deletion.
                            </div>

                            <div class="card mt-4" style="background-color: #fff3cd; border-color: #ffc107;">
                                <div class="card-body">
                                    <h5 class="card-title text-danger"><i class="fas fa-shield-alt"></i> Final Confirmation</h5>
                                    <p class="card-text">To confirm this action, type <strong>"DELETE"</strong> in the box below:</p>
                                    <div class="mb-3">
                                        <input type="text" 
                                               class="form-control form-control-lg" 
                                               name="confirm" 
                                               id="confirmInput" 
                                               placeholder="Type DELETE to confirm"
                                               required
                                               style="font-weight: bold; text-align: center;">
                                    </div>
                                    <small class="text-muted">This is a safety measure to prevent accidental deletions.</small>
                                </div>
                            </div>

                            <div class="mt-4 d-flex gap-2">
                                <button type="submit" 
                                        class="btn btn-danger btn-lg" 
                                        id="purgeButton"
                                        onclick="return confirmPurge()"
                                        disabled>
                                    <i class="fas fa-trash-alt"></i> Purge Selected Tables
                                </button>
                                <a href="{{ route('admin.home') }}" class="btn btn-secondary btn-lg">
                                    <i class="fas fa-times"></i> Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Additional Warning -->
                <div class="alert alert-info mt-4">
                    <h5><i class="fas fa-info-circle"></i> Important Notes:</h5>
                    <ul class="mb-0">
                        <li>This action is <strong>irreversible</strong>. Make sure you have backups before proceeding.</li>
                        <li>System tables (migrations, password_resets) are automatically excluded for safety.</li>
                        <li>After purging, you may need to re-run seeders to restore test data.</li>
                        <li>Consider creating a database backup before purging any data.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleAll(checkbox) {
        const checkboxes = document.querySelectorAll('.table-checkbox');
        checkboxes.forEach(cb => {
            cb.checked = checkbox.checked;
        });
        updateSelectedCount();
    }

    function updateSelectedCount() {
        const selected = document.querySelectorAll('.table-checkbox:checked').length;
        const selectedCountEl = document.getElementById('selectedCount');
        const warningEl = document.getElementById('selectionWarning');
        const purgeButton = document.getElementById('purgeButton');
        
        selectedCountEl.textContent = selected;
        
        if(selected > 0) {
            warningEl.style.display = 'block';
        } else {
            warningEl.style.display = 'none';
        }

        // Enable/disable button based on selection and confirmation
        const confirmInput = document.getElementById('confirmInput');
        if(selected > 0 && confirmInput.value === 'DELETE') {
            purgeButton.disabled = false;
        } else {
            purgeButton.disabled = true;
        }
    }

    document.getElementById('confirmInput').addEventListener('input', function() {
        const selected = document.querySelectorAll('.table-checkbox:checked').length;
        const purgeButton = document.getElementById('purgeButton');
        
        if(selected > 0 && this.value === 'DELETE') {
            purgeButton.disabled = false;
        } else {
            purgeButton.disabled = true;
        }
    });

    function confirmPurge() {
        const selected = document.querySelectorAll('.table-checkbox:checked').length;
        const confirmText = document.getElementById('confirmInput').value;
        
        if(selected === 0) {
            alert('Please select at least one table to purge.');
            return false;
        }

        if(confirmText !== 'DELETE') {
            alert('Please type "DELETE" in the confirmation box.');
            return false;
        }

        const tableNames = Array.from(document.querySelectorAll('.table-checkbox:checked'))
            .map(cb => {
                const row = cb.closest('tr');
                return row.querySelector('td:nth-child(2) strong').textContent;
            })
            .join(', ');

        return confirm(
            '⚠️ FINAL WARNING ⚠️\n\n' +
            'You are about to PERMANENTLY DELETE data from ' + selected + ' table(s):\n' +
            tableNames + '\n\n' +
            'This action CANNOT be undone!\n\n' +
            'Are you absolutely sure you want to proceed?'
        );
    }

    // Prevent form submission if confirmation is wrong
    document.getElementById('purgeForm').addEventListener('submit', function(e) {
        const confirmText = document.getElementById('confirmInput').value;
        if(confirmText !== 'DELETE') {
            e.preventDefault();
            alert('Please type "DELETE" in the confirmation box to proceed.');
            return false;
        }
    });
</script>

@endsection
