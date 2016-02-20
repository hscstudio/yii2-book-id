class_name: AcceptanceTester
modules:
    enabled:
        - PhpBrowser
# you can use WebDriver instead of PhpBrowser to test javascript and ajax.
# This will require you to install selenium. See http://codeception.com/docs/04-AcceptanceTests#Selenium
# "restart" option is used by the WebDriver to start each time per test-file new session and cookies,
# it is useful if you want to login in your app in each test.
        - WebDriver
    config:
        PhpBrowser:
# PLEASE ADJUST IT TO THE ACTUAL ENTRY POINT WITHOUT PATH INFO
            url: http:localhost/basic/web/index-test.php
        WebDriver:
            url: http:localhost/basic/web/index-test.php
            browser: firefox
            restart: true
