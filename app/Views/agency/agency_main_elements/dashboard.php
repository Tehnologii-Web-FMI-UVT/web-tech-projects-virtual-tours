<div class="container mt-5">
        <h1 class="mb-4">Welcome, <?= esc($agency['agencyName']); ?></h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">E-tours Listed Properties</div>
                    <div class="card-body">
                        <?php if(isset($agency['active_properties_listed'])){ ?>
                        <h5 class="card-title"><?= esc($agency['active_properties_listed']);?></h5>
                            <?php }else{?>
                                <p>No E-tours Properties...</p>
                                <?php } ?>
                    </div>
                    <div class="card-footer">
                    <a class="btn btn-sm btn-dark" href="/agency-main/manage-properties">View</a>
                    <a class="btn btn-sm btn-dark" href="/agency-main/create-property">Add </a>

                    
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Total Available Properties</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($agency['total_properties_listed']);?></h5>
                    </div>
                    <div class="card-footer">
                    <a class="btn btn-sm btn-dark" href="#">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Active Agents</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($agency['number_of_agents']);?></h5>
                    </div>
                    <div class="card-footer">
                    <a class="btn btn-sm btn-dark" href="#">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Virtual Tours</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($agency['virtual_tours_created']);?></h5>
                    </div>
                    <div class="card-footer">
                    <a class="btn btn-sm btn-dark" href="#">View</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Placeholder for other dashboard elements -->
        <div class="row">
            <div class="col-lg-12">
                <!-- You can add charts, tables, or additional information here -->
                <!-- <p>More dashboard elements can be added here.</p> -->
            </div>
        </div>
    </div>