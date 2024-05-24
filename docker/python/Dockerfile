FROM ageitgey/face_recognition
WORKDIR "/app"

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y --no-install-recommends apt-utils

RUN apt-get update -y && \
    apt-get install -yq git supervisor zlib1g-dev python3-dev libpng-dev libjpeg-dev libfreetype6-dev libonig-dev

COPY requirements.txt requirements.txt
RUN pip install -r requirements.txt

CMD ["python", "api.py"]