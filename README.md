curlpp
======

curlpp是一个方便在php中发起http请求的C++扩展。基于libcurl开发。有别于已有的curl扩展。curlpp提供的接口更加简明，轻松发起GET／POST请求。

curlpp的主要特点是告别麻烦的设置过程，直面业务本身，在保证性能的前提下，加速开发和运行效率。

curlpp统一了get/post请求的查询域的发送，统一使用参数数组参数$data发送请求数据集。无数据时用空数组即可。head和cookie也可以通过数组轻松设置。

