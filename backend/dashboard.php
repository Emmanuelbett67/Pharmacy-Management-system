<?php
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar'); 
?>
        <div class="page-wrapper">


            <div class="row page-titles">

                <div class="col-md-5 align-self-center">

                    <h3 class="text-themecolor">Dashboard</h3>

                </div>

                <div class="col-md-7 align-self-center">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item ">Dashboard</li>

                    </ol>

                </div>

            </div>

            <style>
                .batch-d{
                    margin-top: 10px;
                }
            </style>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 batch-d d-flex">
                        <div class="card card-inverse card-info d-flex" style="flex: 1 1 100%;">
                            <div class="card-body" style="position: relative;">
                               <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-user float-right"></i></h1>
                                    </div>
                                    <div class="mr-auto">
                                        <h4 class="card-title">TOTAL <br /> CUSTOMER</h4>
                                    </div>
                                    <h2 class="font-light text-white">
                                        <?php 
                                            $this->db->where('c_type', 'Regular');
                                            $query = $this->db->get('customer');
                                            echo $query->num_rows(); ;
                                        ?>
                                    </h2>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 batch-d">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-medkit float-right"></i></h1></div>
                                    <div>
                                        <h4 class="card-title">TOTAL MEDICINE</h4>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"><?php 
                                                        $query = $this->db->get('medicine');
                                                        echo $query->num_rows(); ;
                                                ?></h2> </div>
                                    <div class="col-8 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:50px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 batch-d">
                        <div class="card card-inverse card-danger">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-handshake-o float-right"></i></h1></div>
                                    <div>
                                        <h4 class="card-title">TOTAL SUPPLIER</h4>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"><?php 
                                                        $query = $this->db->get('supplier');
                                                        echo $query->num_rows(); ;
                                                ?></h2> </div>
                                    <div class="col-8 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:50px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 batch-d">
                        <div class="card card-inverse card-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-pencil-square-o float-right"></i></h1></div>
                                    <div>
                                        <h4 class="card-title">TOTAL SALES </h4>
                                        </div>
                                </div>
                                
                                     <!-- <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"><?php 
                                                $this->db->where('create_date', strtotime(date('m/d/y')));
                                                $query = $this->db->get('sales');
                                                echo $query->num_rows();
                                                ?></h2> </div>
                                    <div class="col-8 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:50px"></div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"><?php 
                                                $this->db->where('create_date', strtotime(date('m/d/y')));
                                                $query = $this->db->get('sales');
                                                echo $query->num_rows();

                                                $query = $this->db->get('sales');
                                                $this->db->where("last_date >", 'CURDATE()', FALSE);
                                                echo $query->num_rows(); ;
                                                ?></h2> </div>
                                    <div class="col-8 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:50px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <!-- Row -->

                

               
            </div>

            <footer class="footer"> © Medtrust Pharmacy Management System </footer>

        </div>

<?php 

    $this->load->view('backend/footer');

?>