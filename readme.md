### 介绍

`Voyager` 以优雅和专业的界面脱颖而出，但主要的一点是，它只是工作。清楚的使用说明，友好的前端主题，没有明显的错误或未完成的部分，这就是 Voyager。使用像船长的照片或轮船的图标，使整体看起来不错。

另一个明智的决定是在安装过程中有一个参数 **“dummy-data”** 你可以让你的管理面板预先填写条目来玩。

`Voyager` 还有一个文件管理系统来管理所有你上传的文件，这真的很方便，并有助于在其他管理面板建设者中脱颖而出。

最后，在 `Voyager` 的帮助下，您还可以直接从管理面板更改数据库表格，这是您的后端应用程序中的一种迷你。

> Voyager 官方网站： [https://laravelvoyager.com/](https://laravelvoyager.com/)  
> voyager github: [https://github.com/the-control-group/voyager](https://github.com/the-control-group/voyager)

### 安装步骤

先从 `github` 上拉下代码，并安装环境

```
git clone https://github.com/mlxiu/voyager.git

cd voyager

composer install
```

修改配置

```
cp .env.example .env
vi .env
# 将数据库以及host配置如下（用的是 homestead 环境）

APP_URL=http://voyager.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=voyager
DB_USERNAME=homestead
DB_PASSWORD=secret
```

生成key

```
php artisan key:generate
```

至此，整个安装完成。

### homestead配置以及本地host配置

在 `Homestead.yaml` 中添加映射以及数据库配置

```
cd ~/Homestead
vi Homestead.yaml

# 开始配置
  -map: voyager.test
   to:  /home/vagrant/Code/voyager/public

databases:
   ……
   - voyager

:wq

# 使得配置生效并重载（使用vagrant管理）
vagrant provision
vagrant reload
vagrant up
vagrant ssh
```

在本地 `hosts` 中添加一条记录

```
192.168.10.10 voyager.test
```

至此，`homestead` 以及 `host` 配置完毕。

###

访问： [http://voyager.test/admin](http://voyager.test/admin)  
账号： `lichking_lin86@qq.com`    
密码： `111111`

账号密码是在最后一个迁移文件中，创建的。
