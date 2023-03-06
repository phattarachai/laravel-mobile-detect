<?php

namespace Phattarachai\LaravelMobileDetect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array getDetectionRulesExtended()
 * @method static array getRules()
 * @method static CrawlerDetect getCrawlerDetect()
 * @method static array getBrowsers()
 * @method static array getOperatingSystems()
 * @method static array getPlatforms()
 * @method static array getDesktopDevices()
 * @method static array getProperties()
 * @method static array languages(string $acceptLanguage = null)
 * @method static string|bool browser(string|null $userAgent = null)
 * @method static string|bool platform(string|null $userAgent = null)
 * @method static string|bool device(string|null $userAgent = null)
 * @method static bool isDesktop(string|null $userAgent = null, array $httpHeaders = null)
 * @method static bool isPhone(string|null $userAgent = null, array $httpHeaders = null)
 * @method static string|bool robot(string|null $userAgent = null)
 * @method static bool isRobot(string|null $userAgent = null)
 * @method static string deviceType(null $userAgent = null, null $httpHeaders = null)
 * @method static string|float|false version($propertyName, $type = \Phattarachai\LaravelMobileDetect\Agent::VERSION_TYPE_STRING)
 * @method static string getScriptVersion()
 * @method static void setHttpHeaders(array $httpHeaders = null)
 * @method static array getHttpHeaders()
 * @method static string|null getHttpHeader(string $header)
 * @method static array getMobileHeaders()
 * @method static array getUaHttpHeaders()
 * @method static boolean setCfHeaders(array $cfHeaders = null)
 * @method static array getCfHeaders()
 * @method static string|null setUserAgent(string $userAgent = null)
 * @method static string|null getUserAgent()
 * @method static setDetectionType(string $type = null)
 * @method static string getMatchingRegex()
 * @method static string getMatchesArray()
 * @method static array getPhoneDevices()
 * @method static array getTabletDevices()
 * @method static array getUserAgents()
 * @method static array getUtilities()
 * @method static array getMobileDetectionRules()
 * @method static array getMobileDetectionRulesExtended()
 * @method static bool checkHttpHeadersForMobile()
 * @method static bool isMobile(null $userAgent = null, null $httpHeaders = null)
 * @method static bool isTablet(string $userAgent = null, array $httpHeaders = null)
 * @method static bool|int|null is(string $key, string $userAgent = null, string $httpHeaders = null)
 * @method static bool match($regex, string $userAgent = null)
 * @method static float prepareVersionNo(string $ver)
 * @method static string mobileGrade()
 *
 * @see \Phattarachai\LaravelMobileDetect\Agent
 */

class Agent extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'agent';
    }
}
