*** Setting ***
Library    Selenium2Library
*** Variable ***
${LOGINPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/login.php
${HOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/home.php
${BROWSER}    Chrome

*** TestCase ***
Empty password : 
    Open Browser    ${LOGINPAGE}    ${BROWSER}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=username    chitsutha
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}

Empty Username: 
    Go To    ${LOGINPAGE}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}

Wrong Username:
    Go To    ${LOGINPAGE}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=username    Wronguser
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}

Wrong password:
    Go To    ${LOGINPAGE}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=username    chitsutha
    Input Text    name=password    Wrongpassword
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}
