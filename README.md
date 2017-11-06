# fatcrawler
A simple recursive file crawler

## Arguments

```
-d --dir        The start directory path (required)
-t --file-type  The file type to lookup (required)
-c --chunk-size The chunk size to report to the server
-e --endpoint   The endpoint to report the enumerated files (required)
-f --force-uac  Forces an UAC bypass
-v --verbose    Enables the verbose mode
```

## Running the Crawler

```
python fatcrawler.py --dir C:\ --file-type *.txt --endpoint http://localhost --force-uac --verbose
```

## The UAC Bypass

If the argument ```--force-uac``` is enabled, the script will try to bypass the UAC. This operation only occurs if the the operational system is a "NT family" and the user has no administrative privileges.
It exploits the fodhelper.exe process to run the script with administrative privileges.

## POC

First run:
![Running](http://oi68.tinypic.com/ff8km9.jpg)

Reg created:
![Running](http://oi68.tinypic.com/2u5crjs.jpg)

After elevate privileges:
![Running](http://oi67.tinypic.com/k4waqs.jpg)
