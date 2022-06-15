

<div class="d-flex" id="wrapper">
  <div class="w-100">
          <div class="container-fluid">
            <section>
            <div class="row">
            <div class="col-12 mt-3 mb-1">
            <h5><b>Statistics Dasboard</b></h5>
            <br>
            </div>
            </div>
            <div class="row">
            <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
            <div class="align-self-center">
            <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
            </div>
            <div>
            <h4>Total Rapports</h4>
            <p class="mb-0">Monthly blog rapport</p>
            </div>
            </div>
            <div class="align-self-center">
            <h2 class="h1 mb-0"><?php $countRapport = new RapportsController; echo count($countRapport ->getAllRapports());?></h2>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
            <div class="align-self-center">
            <i class="fa-solid fa-chart-line text-warning fa-3x me-4"></i>
            </div>
            <div>
            <h4>Total Releves</h4>
            <p class="mb-0">Monthly blog releves</p>
            </div>
            </div>
            <div class="align-self-center">
            <h2 class="h1 mb-0"><?php $countReleve = new RelevesController; echo count($countReleve ->getAllReleves());?></h2>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
            <div class="align-self-center">
            <h2 class="h1 mb-0 me-4"><?php $countAgent = new AgentsController; echo count($countAgent ->getAllAgents());?></h2>
            </div>
            <div>
            <h4>Total Agents</h4>
            <p class="mb-0">All your agents departement</p>
            </div>
            </div>
            <div class="align-self-center">
            <i class="fa-solid fa-people-group text-danger fa-3x fa-3x"></i>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
            <div class="align-self-center">
            <h2 class="h1 mb-0 me-4">2</h2>
            </div>
            <div>
            <h4>Total Anomalies</h4>
            <p class="mb-0">Anomalies des machines</p>
            </div>
            </div>
            <div class="align-self-center">
            <i class="fas fa-wrench text-success fa-3x"></i>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
          </div>
  </div>
</div>