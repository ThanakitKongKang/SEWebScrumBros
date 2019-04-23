*** Setting ***
Library    Selenium2Library

*** Variable ***
${LOGINHOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/login.php
${HOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/home.php
${CLASSPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/class.php
${SUMMARYPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/summary.php
${BROWSER}    Chrome

*** Test Case ***
TC01(Specific Date Summary Page (Unclickable Cards))
    Set Selenium Speed    0.5 seconds
    Open Browser    ${LOGINHOMEPAGE}    ${BROWSER}
    Location Should Contain    ${LOGINHOMEPAGE}
    Input Text    name=username    chitsutha
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Contain    ${HOMEPAGE}
    Click Element    xpath: //html/body/div/div[1]/div[1]/a/div/div
    Location Should Contain    ${CLASSPAGE}

    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/a
    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/div/table/tbody/tr[2]
    Location Should Contain    ${SUMMARYPAGE}

    Element Should Not Be Visible    xpath: //*[@id="cards"]/div
    Click Element    xpath: //*[@id="date"]
    Click Element    xpath: //*[@id="date"]/option[4]
    Location Should Contain    ${SUMMARYPAGE}
    Sleep    2 seconds
    Element Should Be Visible    xpath: //*[@id="cards"]/div
    
    Element Should Not Be Visible    xpath: //*[@id="classStudent_wrapper"]
    Click Element    xpath: //*[@id="cards"]/div/div[3]/div/div
    Sleep    2 seconds
    Alert Should Be Present    text=ไม่สามารถทำรายการได้ ไม่มีนักศึกษาที่ลา
    Element Should Not Be Visible    xpath: //*[@id="classStudent_wrapper"]
    
TC01(Summary Page (Empty))
    Go To    ${HOMEPAGE}
    Click Element    xpath: /html/body/div/div[3]/div[3]/a/div/div
    Location Should Contain    ${CLASSPAGE}

    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/a
    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/div/table/tbody/tr[2]
    Location Should Contain    ${SUMMARYPAGE}

    Element Should Not Be Visible    xpath: //*[@id="cards"]/div
    Click Element    xpath: //*[@id="date"]
    Element Should Contain    xpath: //*[@id="date"]/option    ไม่มีข้อมูลการเข้าเรียน