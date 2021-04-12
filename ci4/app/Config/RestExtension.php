<?php namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\HTTP\Request;
use RestExtension\AuthorizeResponse;

class RestExtension extends BaseConfig {

    /*
     * Enabling this feature requires you to
     * - Store routes in the database
     * - Assign scopes to the routes
     * This will allow RestExtension to authorize every request against OAuth2 Scopes
     */
    public $enableApiRouting        = FALSE;

    /*
     * Track every access to the API.
     * Consider adding a CronJob to periodically cleanup this table
     */
    public $enableAccessLog         = FALSE;

    /*
     * Track blocked requests.
     * Ex. if you use scopes to authorize
     */
    public $enableBlockedLog        = FALSE;

    /*
     * Track errors
     */
    public $enableErrorLog          = FALSE;

    /*
     * Enable rate limit
     */
    public $enableRateLimit         = TRUE;

    /*
     * Hourly rate limit
     * Requires enableAccessLog to be TRUE
     */
    public $defaultRateLimit        = 0;

    /*
     * Daily usage report
     */
    public $enableUsageReporting    = FALSE;


    /**
     * Apply function to authenticate $request.
     * access_token is placed in either a header called Authorization or a GET-parameter called access_token
     * @param Request $request
     * @param string $scope
     * @return object
     */
    public function authorize(Request $request, $scope = null) {

        /**
         * If AuthExtension is part of this project you could do something like
         */
//        return (object)\AuthExtension\AuthExtension::authorize($scope);


        /**
         * If AuthExtension is part of another project (ex. Micro Service) you could do something like
         */

//        $url = \CodeIgniter\Config\Config::get('Domains')->auth.'/check?';
//        $url .= http_build_query(['scope' => $scope, 'access_token' => RestRequest::getInstance()->getAccessToken()]);
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_URL, $url);
//        $json = json_decode(curl_exec($ch));
//        curl_close($ch);
//        return $json;
    }

    /*
     * Provide Route for Typescript model exporter
     */
    public $typescriptModelExporterRoute    = 'export/models';

    /*
     * Provide Route for Typescript API exporter
     */
    public $typescriptAPIExporterRoute      = 'export/api/ts';

    /*
     * Provide Route for Typescript API exporter
     */
    public $vueAPIExporterRoute             = 'export/api/vue';

    /*
     * Provide Route for Xamarin model exporter
     */
    public $xamarinModelExporterRoute       = 'xamarin/models';

    /*
     * Provide Namespace for Xamarin API
     */
    public $xamarinAPINamespace             = 'App.Http';
    public $xamarinBaseAPINamespace         = 'App.Http';

    /*
     * Provide Route for Xamarin API exporter
     */
    public $xamarinAPIExporterRoute         = 'xamarin/api';

    /*
     * Provide Namespace for Api request and response Interfaces
     */
    public $apiInterfaceNamespace           = 'App\Interfaces';

    /*
     * Provide base namespace for Controllers to be used in Api export
     */
    public $apiControllerNamespace          = 'App\Controllers';

    /*
     * Provide destination for TypeScript Models to be placed when executed as Command
     */
    public $typescriptModelExporterDestination  = '~/Desktop/ModelExporter';

    /*
     * Provide destination for TypeScript API to be placed when executed as Command
     */
    public $typescriptAPIExporterDestination    = '~/Desktop/APIExporter';

}
