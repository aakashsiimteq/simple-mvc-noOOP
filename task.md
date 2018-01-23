# Following tasks need to be performed:

__1) Can handle any type of requests__

  For example:

  *GET /hello?type=world POST /world?type=hello in URL,php extension should not show up like GET /index.php or GET /hello.php?type=world*

 __2) There should be 1 or more interceptor after the request__

__3) There should be 1 handler of requests__

__4) Templatized view:__

### Flow will be

  `Request (with no extension) -> Interceptors -> Handler -> View`
  - *e.g. I create an endpoint Request: GET /test?type=test

  __Interceptor: __ Checks on type (if value is test throws error else passes to handler)

  __Handler :__ Decorates around type value and passes to view

  __View :__ outputs the pre-formatted HTML*
