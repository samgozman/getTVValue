[![contributions welcome](https://img.shields.io/packagist/l/doctrine/orm.svg?style=flat)](https://github.com/samgozman/getTVValue/blob/master/LICENSE.txt)

#getTVValue for MODx Revolution CMS
My interpretation for lost snippet from MODX Evolution for MODX Revolution users.

Just create snippet "getTVValue" with code from this git and use. :) 

**Input parameters**

1. **resource** *- id of the page*
2. **tv** *- name of the template variable*

**Output parameters**

1. **TV value**

##Examples of usage
		[[getTVValue? &resource=`1` &tv=`bottomPhone`]]
		[[getTVValue? &resource=`1` &tv=`mainPhone`]]
It is useful when you need to use TV in a global chunk with a centralised change from one page.