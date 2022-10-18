# wordpress-my-plugin-example
the example use docker build wordpress and develop wordpress plugin 


## HOW TO RUN
### 1. php package install
use composer install packages

1. in `my-plugin` dir
    `cd plugins/my-plugin`

2. call composer install
    `composer install`

### docker environment
use docker compose run develop environment

1. in this repository dir 
    `docker-compose up`

2. copy plugin
    `cp -r plugins/ .wordpress/wp-content/plugins/`

## Build Swagger yaml
``` shell
# 創建 api-docs資料夾
mkdir api-docs
# 建立匯出swagger文件檔
touch api-docs/api-docs.yaml 
# 執行匯出指令
./vendor/bin/openapi -b autoload.php -o api-docs/api-docs.yaml app/Docs
```