<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Mpesa</title>
    <style>
        [v-cloak] {
            display: none;
        }
        div.fixed {
            opacity: 0.3;
            position: fixed;
            bottom: 10%;
            right: 1px;
            width: 20px;
            border: 3px solid #fafafa;
            background-color: #fafafa;

        }
        div.fixed:hover{
            transition-duration: 0.5s;
            opacity: 1;
            width: 100px;
            transition:width 1s;
        }
    </style>
</head>
<body>
<div class="container-fluid" id="mainContainer">
    <div id="app">
        <nav class="navbar navbar-expand-lg fixed-top" id="topnav">
            <a class="navbar-brand" href="#">
                <img src="logo.png"  height="65" class="d-inline-block align-top" alt="">
            </a>

            <div class="collapse navbar-collapse" id="navbarText">

                <span class="navbar-text"></span>
            </div>
        </nav>
        <div style="height:80px;"></div>
        <ul class="nav nav-tabs" id="myTab" role="tablist" >
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Core Banking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">External</a>
            </li>
        </ul>
        <div style="height:50px;"></div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row" id="mainRow">
                    <div class="col-2">
                        <div id="sideNav">
                            <ul>
                                <li><a href="main.html" >Mpesa Reconciliation</a></li>
                                <li><a href="dashboard.html">ATM Reconciliation</a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-10" id="display">
                        <div >
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">RECONCILIATION</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">MPESA</li>
                                </ol>
                            </nav>
                            <div class="row" style="padding-left: 15px;">
                                <div class="col-4" style="text-align: center;">
                                    <div class="card text-white o-hidden h-100" Style="border-radius: 0;background-color: #31309f">
                                        <div class="card-header">
                                            <div><h4>FUNDS IN A|C CB</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div  ><h3 v-cloak>{{fundAcc}}</h3></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="text-align: center;">
                                    <div class="card text-white o-hidden h-100" Style="border-radius: 0;background-color: #31309f">
                                        <div class="card-header">
                                            <div><h4>RECONCILED CB</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div  ><h3 v-cloak>{{reconciled1}}</h3></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="text-align: center;">
                                    <div class="card text-white o-hidden h-100" Style="border-radius: 0;background-color:#ed0d05">
                                        <div class="card-header">
                                            <div><h4 v-cloak>NOT RECONCILED CB</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div  ><h3 v-cloak>{{notReconciled1}}</h3></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 50px"></div>
                            <div class="row" style="padding-left: 15px;">
                                <div class="col-4" style="text-align: center;">
                                    <div class="card text-white o-hidden h-100" Style="border-radius: 0;background-color: #31309f">
                                        <div class="card-header">
                                            <div><h4>FUNDS IN A|C EXTERNAL</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div  ><h3 v-cloak>{{fundAcc2}}</h3></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="text-align: center;">
                                    <div class="card text-white o-hidden h-100" Style="border-radius: 0;background-color: #31309f">
                                        <div class="card-header">
                                            <div><h4>RECONCILED EXTERNAL</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div  ><h3 v-cloak>{{reconciled2}}</h3></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4" style="text-align: center;">
                                    <div class="card text-white o-hidden h-100" Style="border-radius: 0;background-color:#ed0d05">
                                        <div class="card-header">
                                            <div><h4>NOT RECONCILED EXTERNAL</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div  ><h3 v-cloak>{{notReconciled2}}</h3></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" >
                                <div class="card-header">
                                    <span><h1>Core Banking</h1></span>

                                    <span style="color: black">Core Banking Report</span>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class=" card">
                                                <div class="card-header" style="background-color: white">
                                                    <a href="mpesa transactions (2)/CBS MPESA REPORT.xlsx" download >
                                                        <i class="fa fa-arrow-circle-down" style="color: black"></i> Download Template</a>
                                                </div>
                                                <div class="card-body">
                                                    <input type="file" @change="uploadFile1($event)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5"></div>
                                        <div class="col-3">
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                        style="border-radius: 0"
                                                        data-toggle="dropdown" aria-haspopup="true" >
                                                    Download
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item"><a v-bind:href="url" target="_blank">PDF</a>
                                                        <form action="">
                                                            <input v-model="recon" v-on:change="seturl()"  name="recon" type="radio"  value="1">Reconcile
                                                            <input v-model="notRecon"  v-on:change="seturl()"  name="recon" type="radio"  value="0"> Not Reconciled
                                                        </form>
                                                    </button>
                                                    <button class="dropdown-item"><a v-bind:href="url" target="_blank">Excel</a>
                                                        <form action="">
                                                            <input v-model="recon" v-on:change="seturl()" type="radio" name="recon" value="2">Reconcile
                                                            <input v-model="notRecon"  v-on:change="seturl() "type="radio" name="recon"  value="3"> Not Reconciled
                                                        </form>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <form class="form-inline my-2 my-lg-0" style="padding-left: 70%">
                                        <input class="form-control mr-sm-2" type="search"  v-model="searchValue" placeholder="Search">

                                    </form>

                                </div>
                                <div class="card-body">
                                    <button class="btn btn-danger" @click="clearMpesa()">Delete</button>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Time Stamp</th>
                                            <th>Transaction Name</th>
                                            <th>Comments</th>
                                            <th>Account Number</th>

                                            <th>Credit</th>
                                            <th>Des</th>
                                            <th>Reconcile</th>
                                        </tr>
                                        </thead>
                                        <tbody v-for="sub in data1">

                                        <tr>
                                            <td v-cloak>{{sub.Timestamp}}</td>
                                            <td v-cloak>{{sub.TransactionName}}</td>
                                            <td v-cloak>{{sub.Comments}}</td>
                                            <td v-cloak>{{sub.AccountNumber}}</td>


                                            <td v-cloak>{{sub.Credit}}</td>
                                            <td v-cloak>{{sub.des}}</td>
                                            <td v-cloak v-if="sub.reconcile==1"><span class="badge badge-success">Reconciled</span></td>
                                            <td v-cloak v-if="sub.reconcile==0"><span class="badge badge-danger">Not Reconciled</span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            <div class="card" >
                                <div class="card-header">
                                    <span><h1>Safaricom </h1></span>
                                    <span style="color: black">Safaricom Report</span>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class=" card">
                                                <div class="card-header" style="background-color: white">
                                                    <a href="mpesa transactions (2)/SAFCOMREPORT.xls" download >
                                                        <i class="fa fa-arrow-circle-down" style="color: black"></i> Download Template</a>
                                                </div>
                                                <div class="card-body">
                                                    <input type="file" @change="uploadFile($event)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5"></div>
                                        <div class="col-3">


                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                        style="border-radius: 0"
                                                        data-toggle="dropdown" aria-haspopup="true" >
                                                    Download
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <button class="dropdown-item"><a v-bind:href="url" target="_blank">PDF</a>
                                                        <form action="">
                                                            <input v-model="recon" v-on:change="seturl()"  name="recon" type="radio"  value="4">Reconcile
                                                            <input v-model="notRecon"  v-on:change="seturl()"  name="recon" type="radio"  value="5"> Not Reconciled
                                                        </form>
                                                    </button>
                                                    <button class="dropdown-item"><a v-bind:href="url" target="_blank">Excel</a>
                                                        <form action="">
                                                            <input v-model="recon" v-on:change="seturl()" type="radio" name="recon" value="6">Reconcile
                                                            <input v-model="notRecon"  v-on:change="seturl() "type="radio" name="recon"  value="7"> Not Reconciled
                                                        </form>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0" style="padding-left: 70%">
                                        <input class="form-control mr-sm-2" type="search"  v-model="searchValue1" placeholder="Search">

                                    </form>
                                </div>
                                <div class="card-body">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Details</th>
                                            <th>Receipt No</th>
                                            <th>Paid In</th>
                                            <th>OtherPartyInfo</th>
                                            <th>Dec</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody v-for="sub1 in transA">
                                        <tr>
                                            <td v-cloak>{{sub1.date}}</td>
                                            <td v-cloak>{{sub1.Details}}</td>
                                            <td v-cloak>{{sub1.ReceiptNo}}</td>
                                            <td v-cloak>{{sub1.PaidIn}}</td>
                                            <td v-cloak>{{sub1.OtherPartyInfo}}</td>
                                            <td v-cloak>{{sub1.des}}</td>
                                            <td v-cloak >
                                                <span class="badge badge-danger" v-if="sub1.reconcile==0">Not Reconciled </span>
                                                <span class="badge badge-success" v-if="sub1.reconcile==1">Reconciled</span>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            <div class="card" >
                                <div class="card-header">
                                    <span><h1> Kocela</h1></span>
                                    <span style="color: black">Kocela Report</span>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class=" card">
                                                <div class="card-header" style="background-color: white">
                                                    <a href="#" download >
                                                        <i class="fa fa-arrow-circle-down" style="color: black"></i> Download Template</a>
                                                </div>
                                                <div class="card-body">
                                                    <input type="file" @change="uploadFile2($event)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5"></div>
                                        <div class="col-3">


                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                        style="border-radius: 0"
                                                        data-toggle="dropdown" aria-haspopup="true" >
                                                    Download
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <button class="dropdown-item"><a v-bind:href="url" target="_blank">PDF</a>
                                                        <form action="">
                                                            <input v-model="recon" v-on:change="seturl()"  name="recon" type="radio"  value="4">Reconcile
                                                            <input v-model="notRecon"  v-on:change="seturl()"  name="recon" type="radio"  value="5"> Not Reconciled
                                                        </form>
                                                    </button>
                                                    <button class="dropdown-item"><a v-bind:href="url" target="_blank">Excel</a>
                                                        <form action="">
                                                            <input v-model="recon" v-on:change="seturl()" type="radio" name="recon" value="6">Reconcile
                                                            <input v-model="notRecon"  v-on:change="seturl() "type="radio" name="recon"  value="7"> Not Reconciled
                                                        </form>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0" style="padding-left: 70%">
                                        <input class="form-control mr-sm-2" type="search"  v-model="searchValue2" placeholder="Search">

                                    </form>
                                </div>
                                <div class="card-body">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>TransactionRef</th>
                                            <th>Service</th>
                                            <th>Amount</th>
                                            <th>UserAccount</th>
                                            <th>Destination</th>
                                            <th>Des</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody v-for="sub2 in kocela">
                                        <tr>
                                            <td v-cloak>{{sub2.TransactionRef}}</td>
                                            <td v-cloak>{{sub2.Service}}</td>
                                            <td v-cloak>{{sub2.Amount}}</td>
                                            <td v-cloak>{{sub2.UserAccount}}</td>
                                            <td v-cloak>{{sub2.Destination}}</td>
                                            <td v-cloak>{{sub2.des}}</td>
                                            <td v-cloak>
                                                <span class="badge badge-success" v-if="sub2.reconcile==1">Reconciled</span>
                                                <span span class="badge badge-danger" v-if="sub2.reconcile==0">Not Reconciled </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="fixed">
                    <button class="btn btn-primary" v-on:click="reconcile"><i class="fa fa-redo-alt"></i> Reconcile</button>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card" id="billing">
                    <div class="card-header">
                        <span><h1>Core Banking</h1></span>

                        <span style="color: black">Core Banking Report</span>
                        <div class="row">
                            <div class="col-4">
                                <div class=" card">
                                    <div class="card-header" style="background-color: white">
                                        <a href="mpesa transactions (2)/CBS MPESA REPORT.xlsx" download >
                                            <i class="fa fa-arrow-circle-down" style="color: black"></i> Download Template</a>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" @change="uploadFile1($event)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2"
                                            style="border-radius: 0"
                                            data-toggle="dropdown" aria-haspopup="true" >
                                        Download
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item"><a v-bind:href="url" target="_blank">PDF</a>
                                            <form action="">
                                                <input v-model="recon" v-on:change="seturl()"  name="recon" type="radio"  value="1">Reconcile
                                                <input v-model="notRecon"  v-on:change="seturl()"  name="recon" type="radio"  value="0"> Not Reconciled
                                            </form>
                                        </button>
                                        <button class="dropdown-item"><a v-bind:href="url" target="_blank">Excel</a>
                                            <form action="">
                                                <input v-model="recon" v-on:change="seturl()" type="radio" name="recon" value="2">Reconcile
                                                <input v-model="notRecon"  v-on:change="seturl() "type="radio" name="recon"  value="3"> Not Reconciled
                                            </form>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <form class="form-inline my-2 my-lg-0" style="padding-left: 70%">
                            <input class="form-control mr-sm-2" type="search"  v-model="searchValue" placeholder="Search">

                        </form>

                    </div>
                    <div class="card-body">
                        <button class="btn btn-danger" @click="clearMpesa()">Delete</button>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Time Stamp</th>
                                <th>Transaction Name</th>
                                <th>Comments</th>
                                <th>Account Number</th>

                                <th>Credit</th>
                                <th>Des</th>
                                <th>Reconcile</th>
                            </tr>
                            </thead>
                            <tbody v-for="sub in data1">

                            <tr>
                                <td v-cloak>{{sub.Timestamp}}</td>
                                <td v-cloak>{{sub.TransactionName}}</td>
                                <td v-cloak>{{sub.Comments}}</td>
                                <td v-cloak>{{sub.AccountNumber}}</td>


                                <td v-cloak>{{sub.Credit}}</td>
                                <td v-cloak>{{sub.des}}</td>
                                <td v-cloak v-if="sub.reconcile==1"><span class="badge badge-success">Reconciled</span></td>
                                <td v-cloak v-if="sub.reconcile==0"><span class="badge badge-danger">Not Reconciled</span></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card" id="transactions">
                    <div class="card-header">
                        <span><h1>Safaricom </h1></span>
                        <span style="color: black">Safaricom Report</span>
                        <div class="row">
                            <div class="col-4">
                                <div class=" card">
                                    <div class="card-header" style="background-color: white">
                                        <a href="mpesa transactions (2)/SAFCOMREPORT.xls" download >
                                            <i class="fa fa-arrow-circle-down" style="color: black"></i> Download Template</a>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" @change="uploadFile($event)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-3">


                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu"
                                            style="border-radius: 0"
                                            data-toggle="dropdown" aria-haspopup="true" >
                                        Download
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <button class="dropdown-item"><a v-bind:href="url" target="_blank">PDF</a>
                                            <form action="">
                                                <input v-model="recon" v-on:change="seturl()"  name="recon" type="radio"  value="4">Reconcile
                                                <input v-model="notRecon"  v-on:change="seturl()"  name="recon" type="radio"  value="5"> Not Reconciled
                                            </form>
                                        </button>
                                        <button class="dropdown-item"><a v-bind:href="url" target="_blank">Excel</a>
                                            <form action="">
                                                <input v-model="recon" v-on:change="seturl()" type="radio" name="recon" value="6">Reconcile
                                                <input v-model="notRecon"  v-on:change="seturl() "type="radio" name="recon"  value="7"> Not Reconciled
                                            </form>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="form-inline my-2 my-lg-0" style="padding-left: 70%">
                            <input class="form-control mr-sm-2" type="search"  v-model="searchValue1" placeholder="Search">

                        </form>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-danger" @click="clearMpesa1()">Delete</button>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Details</th>
                                <th>Receipt No</th>
                                <th>Paid In</th>
                                <th>OtherPartyInfo</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody v-for="sub1 in transA">
                            <tr>
                                <td v-cloak>{{sub1.date}}</td>
                                <td v-cloak>{{sub1.Details}}</td>
                                <td v-cloak>{{sub1.ReceiptNo}}</td>
                                <td v-cloak>{{sub1.PaidIn}}</td>
                                <td v-cloak>{{sub1.OtherPartyInfo}}</td>
                                <td v-cloak  v-if="sub1.reconcileDesc=='Reconciled'">
                                    <span class="badge badge-success">Reconciled</span>
                                </td>
                                <td v-cloak  v-if="sub1.reconcileDesc=='Not Reconciled'">
                                    <span class="badge badge-success">Not Reconciled </span>
                                </td>

                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script>
    var app = new Vue({
        el:'#app',
        data:{
            file:'',
            file1:'',
            file2:'',
            data1:[],
            transA:[],
            kocela:[],
            searchValue:'',
            searchValue1:'',
            searchValue2:'',
            fundAcc:'',
            reconciled1:'',
            notReconciled1:'',
            fundAcc2:'',
            reconciled2:'',
            notReconciled2:'',
            recon:'',
            notRecon:'',
            url:''
        },
        watch: {
            searchValue:function () {
                this.coreBanking();
            },
            searchValue1:function () {
                this.getMpesa()
            }
        },
        methods:{
            clearMpesa:_.debounce(function () {

                var app = this
                var formData = new FormData
                formData.append('function','clear')
                formData.append('action','MPESA-CB')
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {

                        app.getAtm();
                        app.coreBankingAtm();
                        alert(response.data.message)
                    })
                    .catch(function (error) {

                    })


            },500),
            clearMpesa1:_.debounce(function () {

                var app = this
                var formData = new FormData
                formData.append('function','clear')
                formData.append('action','MPESA-EXTERNAL')
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {

                        app.getAtm();
                        app.coreBankingAtm();
                        alert(response.data.message)
                    })
                    .catch(function (error) {

                    })


            },500),
            seturl:function () {
                var  app =this
                if(app.recon =='1'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generatePDFmPESACB&reconciled=1"
                }
                if(app.notRecon=='0'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generatePDFmPESACB&reconciled=0"
                }
                if(app.recon =='2'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generateSpreadSheetMpesaCB&reconciled=1"
                }
                if (app.notRecon =='3'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generateSpreadSheetMpesaCB&reconciled=0"
                } if(app.recon =='4'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generatePDFmPESAExternal&reconciled=1"
                }
                if(app.notRecon=='5'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generatePDFmPESAExternal&reconciled=0"
                }
                if(app.recon =='6'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generateSpreadSheetMpesaExternal&reconciled=1"
                }
                if (app.notRecon =='7'){
                    app.url ="https://recon.nouveta.co.ke/index.php?function=generateSpreadSheetMpesaExternal&reconciled=0"
                }

            },
            trancate: function (value) {
                return numeral(value).format('0,0')
            },

            uploadFile:_.debounce(function (event) {
                this.file = event.target.files[0]
                var app = this
                var formData = new FormData
                formData.append('function','uploadExcelMpesaSafaricom')
                formData.append('excel',this.file)
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {
                        app.getMpesa();
                        app.coreBanking();
                        alert(response.data.message)
                    })
                    .catch(function (error) {

                    })


            },500),
            uploadFile1:_.debounce(function (event) {
                this.file1 = event.target.files[0]
                var app = this
                var formData = new FormData
                formData.append('function','uploadExcelMpesaCoreBanking')
                formData.append('excel',this.file1)
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {

                        app.coreBanking();
                        app.getMpesa();
                        alert(response.data.message)
                    })
                    .catch(function (error) {

                    })


            },500),
            uploadFile2:_.debounce(function (event) {
                this.file2 = event.target.files[0]
                var app = this
                var formData = new FormData
                formData.append('function','uploadExcelKocela')
                formData.append('excel',this.file2)
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {

                        app.coreBanking();
                        app.getKocela();
                        alert(response.data.message)
                    })
                    .catch(function (error) {

                    })


            },500),
            coreBanking:_.debounce(function () {
                var app = this
                var formData = new FormData
                formData.append('function','get_core_banking_mpesa')
                formData.append('keyword',app.searchValue)
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {
                        app.data1 = response.data.data
                        app.getDashBoard();
                    })
                    .catch(function (error) {

                    })
            },500),
            getMpesa:_.debounce(function () {
                var app = this
                var formData = new FormData
                formData.append('function','get_mpesa_transaction')
                formData.append('keyword',app.searchValue1)
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {
                        app.transA = response.data.data
                        app.getDashBoard();
                    })
                    .catch(function (error) {

                    })

            },500),
            getKocela:_.debounce(function () {
                var app = this
                var formData = new FormData
                formData.append('function','get_kocela_transaction')
                formData.append('keyword',app.searchValue2)
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {
                        app.kocela = response.data.data
                        app.getDashBoard();
                    })
                    .catch(function (error) {

                    })

            },500),
            trancate: function (value) {
                return numeral(value).format('0,0')
            },
            reconcile:function () {
                var app = this
                var formData = new FormData
                formData.append('function','reconcileMpesa')
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {
                        alert(response.data.message)
                        app.coreBanking();
                        app.getMpesa();
                        app.getDashBoard();

                    })
                    .catch(function (error) {

                    })
            },
            getDashBoard:function () {
                var app = this
                var formData = new FormData
                formData.append('function','dashboardDataCoreBanking')
                axios.post('https://recon.nouveta.co.ke/index.php',formData)
                    .then(function (response) {
                        app.fundAcc = response.data.data.fundInAccountMpesaCB;
                        app.reconciled1 =response.data.data.reconciledMpesaCB;
                        app.notReconciled1 = response.data.data.notReconciledMpesaCB;
                        app.fundAcc2 = response.data.data.fundInAccountMpesaExternal;
                        app.reconciled2 =response.data.data.reconciledMpesaExternal;
                        app.notReconciled2 = response.data.data.notReconciledMpesaExternal;
                    })
            }

        },
        created:function () {
            this.getKocela();
            this.coreBanking();
            this.getMpesa();
            this.getDashBoard();
        }
    })

</script>

</html>
