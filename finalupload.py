from pytube import YouTube
import sys
import boto3
import os

def DownloadYT(url):
    temp = url[32:]
    temp = str(temp)
    temp += ".mp4"
    YouTube(url).streams.filter(res="480p").first().download(filename=temp)
    s3 = boto3.client("s3")
    bucket_name = "cloud-computing-gp"
    object_name = temp
    file_name = temp
    response = s3.upload_file(file_name, bucket_name, object_name)
    os.remove(file_name)
    url = boto3.client("s3").generate_presigned_url(
            ClientMethod="get_object",
            Params={'Bucket': 'cloud-computing-gp', 'Key' : temp},
            ExpiresIn=3600)
    url = str(url)
    print(url)

DownloadYT(sys.argv[1])
