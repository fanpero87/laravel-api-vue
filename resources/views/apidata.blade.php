<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API call</title>
        
        <!-- Bootstrap style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
    </head>
    <body>
        <div>
            <div class="container mt-5">
                <div class="jumbotron">  
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-center fw-bold">
                                    Show all Emails
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Choose an Email</label>
                                        <select id="selectBox" ng-change="getemail(this.value);" name="users[]" multiple class="form-control mt-2">
                                            @foreach ( $data as $item )
                                            <option id="optionBox" value="{{ $item['email'] }}">{{ $item['email'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div id="app">
                                    <view-button id="selected-email" select-email="Eliseo@gardner.biz"></view-button>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/app.js"></script>  
    </body>
</html>