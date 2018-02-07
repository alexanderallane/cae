
<!DOCTYPE html>
<html lang="en" ng-app="turtleFacts">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turtle Facts and Quiz</title>
    <!-- Bootstrap css and my own css -->
    <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <div class="container">
        <div class="page-header">
            <h1>Turtle Facts Quiz</h1>
            <h3>
                Learn about all the turtles below before you decide to take on the 
                <strong>TURTLE QUIZ</strong>
            </h3>
        </div>
        <div ng-controller="listCtrl as list">
        <form class="form-inline well well-sm clearfix">
            <span class="glyphicon glyphicon-search"></span>
            <input 
                type="text" 
                placeholder="Search..." 
                class="form-control"
                ng-model="list.search">
        </form>
        <div class="row">
            <div class="col-sm-6" ng-repeat="turtle in list.data | filter:list.search">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                                        
                            <img ng-src="{{turtle.image_url}}" 
                                class="img-rounded img-responsive well-image">
                        </div>
                        <div class="col-md-6">
                            <h4>{{turtle.type}}</h4>

                            <p><strong>Locations: </strong>{{turtle.locations}}</p>
                            <p><strong>Size: </strong>{{turtle.size}}</p>
                            <p><strong>Average Lifespan: </strong>{{turtle.lifespan}}</p>
                            <p><strong>Diet: </strong>{{turtle.diet}}</p>
                            <button class="btn btn-primary pull-right"
                                    data-toggle="modal"
                                    data-target="#turtle-info"
                                    ng-click="list.changeActiveTurtle(turtle)">Learn More</button>
                                    <div class="modal" id="turtle-info">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h2>{{list.activeTurtle.type}}</h2>
                                                </div>
                                                <div class="model-body">
                                                    <div class="row">
                                                        <div class="col-xs-8 col-xs-offset-2">
                                                            <img ng-src="{{list.activeTurtle.image_url}}" 
                                                                class="img-rounded img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong>Locations: </strong>{{list.activeTurtle.locations}}</p>
                                                            <p><strong>Size: </strong>{{list.activeTurtle.size}}</p>
                                                            <p><strong>Average Lifespan: </strong>{{list.activeTurtle.lifespan}}</p>
                                                            <p><strong>Diet: </strong>{{list.activeTurtle.diet}}</p>
                                                        </div>
                                                        <div class="col-xs-12 top-buffer">
                                                        <p>{{list.activeTurtle.description}}</p>
                                                        
                                                        <button class="btn btn-danger pull-right" 
                                                                data-dismiss="modal">Close</button>
                                                    </div>   
                                                </div>            
        
                                            </div>
                                        </div>
                                    </div>           
                        </div>
                    </div><!-- row -->
                </div><!-- well -->
            </div><!-- col-xs-6 -->
        </div>
    </div>
    </div>


    

    <!-- third party js -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.2/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Our application scripts -->
    <script src="js/app.js"></script>
    <script src="js/controllers/list.js"></script>


</body>
</html>
